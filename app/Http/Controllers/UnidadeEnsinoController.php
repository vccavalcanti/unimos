<?php

namespace App\Http\Controllers;

use App\Http\Requests\UnidadeEnsinoFormRequest;
use App\UnidadeEnsino;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class UnidadeEnsinoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $unidade = Auth::user()->UnidadeEnsino->first();
        
        return view('unidadeEnsino.form', compact('unidade'));
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
    public function store(Request $request)
    {
        $data = $request->all();
        //$data = json_decode($data);
        //$data->rows[0]->test1 = "5";
        //$request->merge( array( 'nome_fantasia' => 'fantasia no ar' ) );
        //$request->merge( array( 'MARGE' => 'PQPQPQPPQ no ar' ) );
        //$data->user_id =  Auth::user()->id;
        //dd($data);
        UnidadeEnsino::create($data);
        return redirect('unidadeensino')->with('message', 'Unidade de ensino Salva!');
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
    public function update(UnidadeEnsinoFormRequest $request, $id)
    {
        $unidade = UnidadeEnsino::findOrFail($id);
        $this->authorize('modify', $unidade);
        $data = $request->all();
        $unidade->update($data);

        return redirect('unidadeensino')->with('message', 'Unidade de Ensino atualizada');
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
}
