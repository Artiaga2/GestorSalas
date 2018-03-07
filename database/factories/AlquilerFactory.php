<?php

use App\Alquiler;
use Carbon\Carbon;
use Faker\Generator as Faker;

$factory->define(Alquiler::class, function (Faker $faker) {

    $time1 = Carbon::createFromTimestamp($faker->dateTimeThisDecade()->getTimestamp());
    $time2 = Carbon::createFromTimestamp($faker->dateTimeThisDecade()->getTimestamp());

    return [

        'fecha_inicio_alquiler'         =>  ($time1 < $time2) ? $time1 : $time2,
        'fecha_finalizacion_alquiler'   =>  ($time1 > $time2) ? $time1 : $time2,
        'created_at'                    =>  ($time1 < $time2) ? $time1 : $time2,
        'updated_at'                    =>  ($time1 > $time2) ? $time1 : $time2

    ];
});
