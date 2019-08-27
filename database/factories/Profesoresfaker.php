<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Profesor;
use Faker\Generator as Faker;

$factory->define(Profesor::class, function (Faker $faker) {
    return [
       'cedula' => $faker->unique()->numberBetween($min = 60000000, $max = 200000000),
       'nombre_profesor' => $faker->name,
       'apellido_profesor' => $faker->lastName, 
       'profesion' => $faker->jobTitle,
       'correo_profesor' => $faker->safeEmail,
       'estado' => 1
    ];
});
