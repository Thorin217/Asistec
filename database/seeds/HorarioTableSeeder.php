<?php

use Illuminate\Database\Seeder;
use ASISTEC\Horario;
class HorarioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Factory(Horario::class, 20)->create();
    }
}
