<?php

namespace App\Http\Controllers;

use App\Alquiler;
use App\Salas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AlquilerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alquiler = Alquiler::all();

        return view('alquiler.create',[
            'alquiler' => $alquiler,
        ]);
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
        $user = Auth::user();
        $salas = Salas::where('id', 1)->first();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Alquiler  $alquiler
     * @return \Illuminate\Http\Response
     */
    public function show(Alquiler $alquiler)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Alquiler  $alquiler
     * @return \Illuminate\Http\Response
     */
    public function edit(Alquiler $alquiler)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Alquiler  $alquiler
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Alquiler $alquiler)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Alquiler  $alquiler
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alquiler $alquiler)
    {
        //
    }
}
