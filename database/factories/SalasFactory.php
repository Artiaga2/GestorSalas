<?php

use App\Salas;
use Carbon\Carbon;
use Faker\Generator as Faker;

$factory->define(Salas::class, function (Faker $faker) {

    $time1 = Carbon::createFromTimestamp($faker->dateTimeThisDecade()->getTimestamp());
    $time2 = Carbon::createFromTimestamp($faker->dateTimeThisDecade()->getTimestamp());

    return [
        'nombre'         => $faker->firstName(),
        'tipo'           => $faker->randomElement($array = array('Sala de estudio', 'Auditorio', 'Sala de juegos')),
        'imagen'         => 'http://lorempixel.com/150/150/?random',
        'capacidad'      => $faker->randomDigit,
        'disponibilidad' => $faker->randomElement($array1 = array('Libre', 'Ocupada', 'Cerrada')),
        'created_at'=> ($time1 < $time2) ? $time1 : $time2,
        'updated_at'=> ($time1 > $time2) ? $time1 : $time2
    ];
});
