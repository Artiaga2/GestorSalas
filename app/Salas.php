<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Salas extends Model
{

    use Notifiable;


    protected $fillable = [
        'user_id', 'nombre', 'tipo', 'imagen','capacidad', 'disponibilidad', 'precio', 'caracteristicas'
    ];

    protected $guarded =['id', 'created_at', 'updated_at'];

    public function user(){

        return $this->belongsTo(User::class);
    }

//    public function getFotoAttribute($foto)
//    {
//        if (starts_with($foto, "default_product")) {
//            return $foto;
//        } else if (starts_with($foto, "https://picsum")) {
//            return $foto;
//        } else if (starts_with($foto, "/images/default")) {
//            return $foto;
//        }
//        return Storage::disk('public')->url($foto);
//    }

    public function caracteristicas()
    {
        return $this->belongsToMany(Caracteristicas::class);
    }

    public function caracteristicasSalas(){
        return $this->caracteristicas;
    }

}
