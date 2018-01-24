<?php

namespace App\Http\Controllers;

use App\Salas;
use Illuminate\Http\Request;
use App\Http\Requests\CreateSalaRequest;

class SalasController extends Controller
{
    public function show(Salas $salas)
    {

        return view('salas.show', [
            'salas' => $salas
        ]);
    }

    public function create()
    {
        return view('salas.create');
    }

    public function store(CreateSalaRequest $request){
        Salas::create([
            'Nombre'         => $request->input('nombre'),
            'Tipo'           => ('Sala de estudio'),
            'Imagen'         => 'http://lorempixel.com/150/150/?\'.mt_rand(0,1000)',
            'Capacidad'      => '10',
            'Disponibilidad' => 'Libre'

        ]);

        return redirect('/');
    }
}
