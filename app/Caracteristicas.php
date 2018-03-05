<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Caracteristicas extends Model
{
    protected $fillable = ['nombre'];


    public function salas()
    {
        return $this->belongsToMany(Salas::class);
    }

    public static  function crearCaracteristicas(){
        Caracteristicas::create([

            'nombre' => 'Television'
        ]);
        Caracteristicas::create([

            'nombre' => 'Wifi'
        ]);
        Caracteristicas::create([

            'nombre' => 'Proyector'
        ]);
    }
}
