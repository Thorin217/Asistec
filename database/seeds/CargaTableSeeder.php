<?php

use Illuminate\Database\Seeder;
use ASISTEC\Carga;
class CargaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Factory(Carga::class, 10)->create();
    }
}
