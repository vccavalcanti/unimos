<?php

namespace App\Http\Controllers;

use App\Contratante;
use App\Http\Requests\ContratanteFormRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Role;

class ContratanteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContratanteFormRequest $request)
    {
        $data = $request->all();
        $contratante = Contratante::create($data);
        $user = User::findOrFail($contratante->user_id);
        if(!($user->hasRole('contratante'))){
            $role_contratante = Role::where('name', 'contratante')->first();
            $user->attachRole($role_contratante);
        }

        return redirect('contratante/profile')->with('message', 'Perfil de Contratante criado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ContratanteFormRequest $request, $id)
    {
        $contratante = Contratante::findOrFail($id);
        $this->authorize('modify', $contratante);

        $data = $request->all();
        $contratante->update($data);

        return redirect('/profile/contratante')->with('message', 'Perfil de Contratante Atualizado!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function profile(){
        $contratante = Auth::user()->Contratante()->first();
        return view('contratante.form', compact('contratante'));
    }
}
