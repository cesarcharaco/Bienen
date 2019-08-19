<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlanificacionProcesoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('planificacion_proceso', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_planificacion');
            $table->unsignedBigInteger('id_empleado');
            $table->string('hora_inicio');
            $table->string('hora_finalizada')->nullable();
            $table->enum('status',['Iniciada','Finalizada']);
            

            $table->foreign('id_empleado')->references('id')->on('empleados')->onDelete('cascade');
            $table->foreign('id_planificacion')->references('id')->on('planificacion')->onDelete('cascade');
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
        Schema::dropIfExists('planificacion_proceso');
    }
}
