<?php

namespace App\Http\Controllers;

use App\Models\Treinador;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class TreinadorController extends Controller
{
    public function list()
    {
        return auth()->user()->treinadors;
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
        Treinador::create([
            'nome' => $request->nome,
            'ginasio'=> $request->ginasio,
            'liga' => $request->liga,
            'user_id' => Auth::user()->id,
        ]);
        return redirect('dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Treinador  $treinador
     * @return \Illuminate\Http\Response
     */
    public function show(Treinador $treinador)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Treinador  $treinador
     * @return \Illuminate\Http\Response
     */
    public function edit(Treinador $treinador)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Treinador  $treinador
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Treinador $treinador)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Treinador  $treinador
     * @return \Illuminate\Http\Response
     */
    public function destroy(Treinador $treinador)
    {
        //
    }
}
