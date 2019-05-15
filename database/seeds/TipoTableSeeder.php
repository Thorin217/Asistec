<?php

use Illuminate\Database\Seeder;
use ASISTEC\Tipo;
class TipoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Factory(Tipo::class, 3)->create();
    }
}
