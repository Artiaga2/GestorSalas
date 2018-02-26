<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Salas extends Model
{

    use Notifiable;


    protected $fillable = [
        'user_id', 'nombre', 'tipo', 'imagen','capacidad', 'disponibilidad',
    ];

    protected $guarded =['id', 'created_at', 'updated_at'];

    public function user(){

        return $this->belongsTo(User::class);
    }

}
