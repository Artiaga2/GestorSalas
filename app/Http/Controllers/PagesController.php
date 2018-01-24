<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * Genera la página de inicio del proyecto.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function home(){
            return view('welcome');
            $salas = [


            ];

            return view('home',[
                'salas' => $salas
            ]);
     }
    /**
     * Página de saludo.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function saludo(){
            $saludo = "Bienvenidos a Alquiler de Salas";
            $usuario = "Alejandro";

            return view('saludo', [
                'saludo' => $saludo,
                'usuario'=> $usuario
                    ]);
    }
}

