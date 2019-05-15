<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCargasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cargas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('emailDocente',125)->unique();
            $table->string('nombreDocente',100);
            $table->string('facultad',125);
            $table->string('escuela',125);
            $table->string('nombreMateria',75);
            $table->string('codMateria',10);
            $table->integer('seccion');
            $table->string('aula',4);
            $table->string('dias');
            $table->integer('inscritos');
            $table->unsignedBigInteger('tipo_id');
            //$table->string('usuario',15);
            $table->string('password',8);
            $table->timestamps();

            $table->foreign('tipo_id')->references('id')->on('tipos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cargas');
    }
}
