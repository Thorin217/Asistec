<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('carnet',12)->unique();
            $table->string('nombreAlumno',100);
            $table->string('email',125);
            $table->string('password',8);
            $table->unsignedBigInteger('carga_id');
            $table->unsignedBigInteger('tipo_id');
            $table->timestamps();

            $table->foreign('carga_id')->references('id')->on('cargas');
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
        Schema::dropIfExists('alumnos');
    }
}
