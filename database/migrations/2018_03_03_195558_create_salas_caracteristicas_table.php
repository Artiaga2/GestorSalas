<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalasCaracteristicasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salas_caracteristicas', function (Blueprint $table) {
            $table->integer('salas_id')->unsigned();
            $table->integer('caracteristicas_id')->unsigned();

            $table->primary(['salas_id', 'caracteristicas_id']);

            $table->foreign('salas_id')->references('id')->on('salas')->onDelete('cascade');
            $table->foreign('caracteristicas_id')->references('id')->on('caracteristicas')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('salas_caracteristicas');
    }
}
