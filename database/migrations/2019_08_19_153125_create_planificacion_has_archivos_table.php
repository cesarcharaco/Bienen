<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlanificacionHasArchivosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('planificacion_has_archivos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_planificacion');
            $table->string('nombre');
            $table->string('url');
            $table->enum('tipo',['img','file']);

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
        Schema::dropIfExists('planificacion_has_archivos');
    }
}
