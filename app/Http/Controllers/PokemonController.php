<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class PokemonController extends Controller
{
    public function list()
    {
        return auth()->user()->pokemon;
    }
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
    public function store(Request $request)
    {
        Pokemon::create([
            'nome' => $request->nome,
            'descricao'=> $request->descricao,
            'type' => $request->type,
            'user_id' => Auth::user()->id,
        ]);
        return redirect('dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pokemon  $pokemon
     * @return \Illuminate\Http\Response
     */
    public function show(Pokemon $pokemon)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pokemon  $pokemon
     * @return \Illuminate\Http\Response
     */
    public function edit(Pokemon $pokemon)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pokemon  $pokemon
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pokemon $pokemon)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pokemon  $pokemon
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pokemon $pokemon)
    {
        $pokemon->delete();

        return redirect('dashboard');
    }
}
