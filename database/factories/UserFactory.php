<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {

    $name = $faker->firstName;
    $lastName = $faker->lastName;
    $slug = $name . "." . $lastName;

    $time1 = Carbon::createFromTimestamp($faker->dateTimeThisDecade()->getTimestamp());
    $time2 = Carbon::createFromTimestamp($faker->dateTimeThisDecade()->getTimestamp());

    return [
        'name' => $name,
        'lastName' => $lastName,
        'userName' => $slug,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'ciudad' => $faker->city,
        'codigoPostal' =>$faker->postcode,
        'numeroTarjeta' =>$faker->creditCardNumber,
        'tipoTarjeta' => $faker->creditCardType,
        'tlfMovil' => $faker->unique()->e164PhoneNumber,
        'website' => $faker->url,
        'about' => $faker->text,
        'avatar' => 'https://picsum.photos/120/120/?image=' . mt_rand(0,1000),
        'remember_token' => str_random(10),
        'created_at'=> ($time1 < $time2) ? $time1 : $time2,
        'updated_at'=> ($time1 > $time2) ? $time1 : $time2
    ];
});
