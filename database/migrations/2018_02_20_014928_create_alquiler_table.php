<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlquilerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alquiler', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('salas_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->dateTime('fecha_inicio_alquiler');
            $table->dateTime('fecha_finalizacion_alquiler');

            $table->foreign('salas_id')->references('id')->on('salas');
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alquiler');
    }
}
