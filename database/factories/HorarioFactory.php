<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use ASISTEC\Model;
use Faker\Generator as Faker;

$factory->define(ASISTEC\Horario::class, function (Faker $faker) {
    return [
        'horaInicio'=>$faker->time,
        'horaFin'=>$faker->time,
        'carga_id'=>rand(1,10)
    ];
});
