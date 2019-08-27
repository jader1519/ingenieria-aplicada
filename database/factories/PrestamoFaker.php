<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Prestamo;
use Faker\Generator as Faker;

$factory->define(Prestamo::class, function (Faker $faker) {
    return [
        'fecha_prestamo' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'hora_inicial' => $faker->time($format = 'H:i:s', $max = 'now'),
        'hora_fin' => $faker->time($format = 'H:i:s', $max = 'now'),
        'programa' => $faker->domainWord,
        'herramienta_id' => function() {
        	return factory(App\Models\Herramienta::class)->create()->id;
        },
        'profesor_id' => rand(1,2),
        'aula_id' => rand(2,3),
        'nombre_estudiante' => $faker->name,
        'cedula' => $faker->numberBetween($min = 60000000, $max = 200000000),
        'estado' => 3
    ];
});
