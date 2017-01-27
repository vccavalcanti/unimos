<?php

namespace App\Http\Controllers;

use App\Http\Requests\EspacoFormRequest;
use App\UnidadeEnsino;
use Illuminate\Http\Request;
use App\Espaco;
use App\User;

class EspacoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($unidadeEnsino_id = ($request->get('unidadeEnsino_id'))) {
        $espacos = User::find($request->user()->id)->Espacos()->where('unidadeEnsino_id', $unidadeEnsino_id)->paginate(3);

        }
        else {
            $espacos = User::find($request->user()->id)->Espacos()->paginate(2);
        }

            return view('espacos.index', compact('espacos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("espacos.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EspacoFormRequest $request)
    {
        $data = $request->all();
        //dd($data);
        //$request->user()->UnidadeEnsino->first()->Espaco->create($data);
        Espaco::create($data);
        return redirect('espaco')->with('message', 'Espaço Salvo!');
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
    public function update(Request $request, $id)
    {
        //
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
