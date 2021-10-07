<?php

namespace App\Http\Controllers;

use App\Models\Convidado;
use Illuminate\Http\Request;
use Session;


class ConvidadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $convidados = \App\Models\Convidado::All();
        return view('convidados.index', ['convidados' => $convidados]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('convidados.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Convidado::create($request->all());
        session()->flash('mensagem','Convidado cadastrado com sucesso!');
        return redirect()->route('convidados.index');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Convidado  $convidado
     * @return \Illuminate\Http\Response
     */
    public function show(Convidado $convidado)
    {
        return view('convidados.show', ['convidado' => $convidado]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Convidado  $convidado
     * @return \Illuminate\Http\Response
     */
    public function edit(Convidado $convidado)
    {
        return view('convidados.edit', ['convidado' => $convidado]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Convidado  $convidado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Convidado $convidado)
    {
        $convidado->update($request->all());
        return redirect()->route('convidados.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Convidado  $convidado
     * @return \Illuminate\Http\Response
     */
    public function destroy(Convidado $convidado)
    {
        $convidado->delete();
        return redirect()->route('convidados.index');
    }
}
