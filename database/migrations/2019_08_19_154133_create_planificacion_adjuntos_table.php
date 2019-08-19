<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlanificacionAdjuntosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('planificacion_adjuntos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_planificacion_ini');
            $table->unsignedBigInteger('id_empleado');
            $table->string('nombre');
            $table->string('url');
            $table->enum('tipo',['img','file']);

            $table->foreign('id_empleado')->references('id')->on('empleados')->onDelete('cascade');
            $table->foreign('id_planificacion_ini')->references('id')->on('planificacion_proceso')->onDelete('cascade');
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
        Schema::dropIfExists('planificacion_adjuntos');
    }
}
