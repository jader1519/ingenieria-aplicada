<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Herramienta;
use Faker\Generator as Faker;

$factory->define(Herramienta::class, function (Faker $faker) {
    return [
        'nombre_herramienta' => $faker->word,
        'estado' => 2
    ];
});
