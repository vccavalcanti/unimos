<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::get('/', function () {
    //return view('auth.login');
    return view('home');
})->middleware('auth');

Route::get('/home', 'HomeController@index');


Route::group(['middleware' => 'auth'], function() {
    Route::resource('articulador', 'ArticuladorController');
    Route::resource('unidadeensino', 'UnidadeEnsinoController');
    Route::resource('espaco', 'EspacoController');


    Route::resource('professor', 'ProfessorController');
    Route::get('/profile/professor',[
        'as' => 'professor.profile',
        'uses' => 'ProfessorController@profile'
    ]);

    Route::resource('contratante', 'ContratanteController');
    Route::get('/profile/contratante',[
        'as' => 'contratante.profile',
        'uses' => 'ContratanteController@profile'
    ]);
});






//testes

Route::get('/administrator', function () {
    return "vc deveria estar aqui?";
})->middleware(['role:superadministrator']);

Route::get('/paypal', function () {
    return view('paypal');
});

Route::get('/profile/articulador/{username}','ArticuladorController@profile' );

Route::get('/roles', function () {
    return view('roles');
});

Route::get('/addRoleUnidade', function () {
    $role_unidadeEnsino = App\Role::where('name', 'unidadeEnsino')->first();
    Auth::user()->attachRole($role_unidadeEnsino);
    return view('roles');
});