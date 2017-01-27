<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfessorFormRequest;
use App\Professor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfessorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

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
    public function store(ProfessorFormRequest $request)
    {
        $data = $request->all();
        Professor::create($data);
        return redirect('/profile/professor')->with('message', 'Perfil de Professor Salvo!');
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

        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProfessorFormRequest $request, $id)
    {
        $professor = Professor::findOrFail($id);
        $this->authorize('modify', $professor);

        $data = $request->all();
        $professor->update($data);

        return redirect('/profile/professor')->with('message', 'Perfil de Professor Atualizado!');
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
        $professor = Auth::user()->Professor()->first();
        return view('professor.form', compact('professor'));
    }
  
}
