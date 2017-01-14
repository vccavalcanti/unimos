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
    return view('auth.login');
});

Route::get('/home', 'HomeController@index');

Route::get('/professor', function () {
    return view('home');
});

Route::get('/administrator', function () {
    return "vc deveria estar aqui?";
})->middleware(['role:superadministrator']);

Route::resource('articulador', 'ArticuladorController');

Route::resource('espaco', 'EspacoController');




