<?php

namespace App\Http\Controllers;

use App\Caracteristicas;
use App\Salas;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Http\Requests\CreateSalaRequest;
use Illuminate\Support\Facades\Auth;

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

        $user = $request->user();


        Salas::create([
            'user_id'        => $user->id,
            'nombre'         => $request->input('nombre'),
            'tipo'           => ('Sala de estudio'),
            'imagen'         => 'http://lorempixel.com/150/150/?.mt_rand(0,1000)',
            'capacidad'      => '10',
            'disponibilidad' => 'Libre',

        ]);

        return redirect('/');
    }

        public function tabla()
    {
        $tablaSalas = Salas::all();

        return view('salas.tabla', [
            'tablaSalas' => $tablaSalas
        ]);
    }

    public function destroy(Salas $sala)
    {
        if( ! Auth::user()->can('delete', $sala) ){
           return redirect()->route('home');
        }

        $sala->delete();

        return redirect()->route('user', Auth::user()->userName);
    }
}