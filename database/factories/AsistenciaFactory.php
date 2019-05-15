<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use ASISTEC\Asistencia;
use Faker\Generator as Faker;

$factory->define(ASISTEC\Asistencia::class, function (Faker $faker) {
    return [
        'alumno_id'=>rand(1,100),
        'carga_id'=>rand(1,10),
        'fechaAsistencia'=>$faker->datetime,
    ];
});
