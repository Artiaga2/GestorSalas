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
        'avatar' => 'https://picsum.photos/150/150/?random',
        'remember_token' => str_random(10),
    ];
});
