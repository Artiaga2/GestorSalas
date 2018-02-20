<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alquiler extends Model
{
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function sala(){
        return $this->belongsTo(Salas::class);
    }
}

