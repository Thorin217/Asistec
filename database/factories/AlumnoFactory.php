<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use ASISTEC\Alumno;
use Faker\Generator as Faker;

$factory->define(ASISTEC\Alumno::class, function (Faker $faker) {
    return [
        'carnet'=> Str::random(12),
        'nombreAlumno'=>$faker->name(25),
        'email'=>$faker->unique()->safeEmail,
        'password'=>Str::random(8),
        'carga_id'=>rand(1,10),
        'tipo_id'=>rand(1,3)
    ];
});
