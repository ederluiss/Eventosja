<?php

namespace App\Http\Controllers;

use App\Models\Convite;
use Illuminate\Http\Request;

class ConviteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $convite = \App\Models\Convite::All();
        return view('convites.index', ['convites' => $convite]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // $convidado = DB::table('convidados')->get();

        // dd($request->evento);  
        $convidados = \App\Models\Convidado::All();
        // dd($convidados);
        //dd($request->evento);  
        return view('convites.create', ['convidados' => $convidados, 'evento' => $request->evento]);

        //return view('convites.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Convite::create($request->all('id_convidado', 'id_evento'));
        return redirect()->route('eventos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Convite  $convite
     * @return \Illuminate\Http\Response
     */
    public function show(Convite $convite)
    {
        return view('convites.show', ['convite' => $convite]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Convite  $convite
     * @return \Illuminate\Http\Response
     */
    public function edit(Convite $convite)
    {
        return view('convites.edit', ['convite' => $convite]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Convite  $convite
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Convite $convite)
    {
        $convite->update($request->all());
        return redirect()->route('convites.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Convite  $convite
     * @return \Illuminate\Http\Response
     */
    public function destroy(Convite $convite)
    {
        $convite->delete();
        return redirect()->route('convites.index');
    }
}
