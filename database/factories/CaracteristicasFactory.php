<?php

use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {



    return [

        'nombre' => $faker->randomElement($array1 = array('Wifi', 'Tele', 'Proyector')),

    ];
});
