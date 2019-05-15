<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use ASISTEC\Model;
use Faker\Generator as Faker;

$factory->define(ASISTEC\Tipo::class, function (Faker $faker) {
    return [
        'tipo'=>$faker->name(10)
    ];
});
