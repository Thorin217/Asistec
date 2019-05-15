<?php

use Illuminate\Database\Seeder;
use ASISTEC\Asistencia;
class AsistenciaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Factory(Asistencia::class, 500)->create();
    }
}
