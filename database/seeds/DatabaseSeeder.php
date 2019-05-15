<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(TipoTableSeeder::class);
        $this->call(CargaTableSeeder::class);
        $this->call(AlumnoTableSeeder::class);
        $this->call(AsistenciaTableSeeder::class);
        $this->call(HorarioTableSeeder::class);

    }
}
