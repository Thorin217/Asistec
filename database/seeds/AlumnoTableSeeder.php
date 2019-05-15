<?php

use Illuminate\Database\Seeder;
use ASISTEC\Alumno;
class AlumnoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Factory(Alumno::class,200)->create();
    }
}
