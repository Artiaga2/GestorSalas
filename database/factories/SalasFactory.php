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
        'imagen'         => 'https://picsum.photos/120/120/?image=' . mt_rand(0,1000),
        'capacidad'      => $faker->randomDigit,
        'disponibilidad' => $faker->randomElement($array1 = array('Libre', 'Ocupada', 'Cerrada')),
        'precio'         => '10',
        'created_at'=> ($time1 < $time2) ? $time1 : $time2,
        'updated_at'=> ($time1 > $time2) ? $time1 : $time2
    ];
});
