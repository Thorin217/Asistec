<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use ASISTEC\Carga;
use Faker\Generator as Faker;

$factory->define(ASISTEC\Carga::class, function (Faker $faker) {
    return [
        'emailDocente'=>$faker->unique()->safeEmail,
        'nombreDocente'=>$faker->name(25),
        //'usuario'=>$faker->name(10),
        'facultad'=>$faker->text(25),
        'escuela'=>$faker->text(20),
        'nombreMateria'=>$faker->text(25),
        'codMateria'=>Str::random(5),
        'seccion'=>rand(1,9),
        'aula'=>Str::random(3),
        'dias'=>Str::random(10),
        'inscritos'=>rand(20,50),
        'password'=>Str::random(8),
        'tipo_id'=>rand(1,3),
    ];
});
