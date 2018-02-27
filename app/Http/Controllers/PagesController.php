<?php

namespace App\Http\Controllers;

use App\Salas;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * Genera la página de inicio del proyecto.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function home(){
//            return view('welcome');

            $salas = Salas::orderBy('created_at', 'desc')->paginate(10);

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

    public function damePaginaSalas(){
        if (request()->ajax()){
            $salas = Salas::orderBy('created_at', 'desc')->paginate(10);
            return View::make('listado', array('salas' => $salas))->render();
        }else{
            return redirect('/');
        }
    }

    public function damePaginaSalasJSON(){
        $salas = Salas::orderBy('created_at', 'desc')->paginate(10);
        return response()->json([
            View::make('listado', array('salas' => $salas))->render()
        ]);
    }

    public function damePaginaSalasJSON2(){

        $salas = Salas::orderBy('created_at', 'desc')->paginate(10);
        return $salas;
    }


}

