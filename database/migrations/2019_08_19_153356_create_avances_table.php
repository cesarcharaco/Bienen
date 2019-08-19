<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAvancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('avances', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_planificacion');
            $table->date('fecha');
            $table->enum('status',['Vacío','Entregado'])->default('Vacío');
            $table->string('comentario')->nullable();

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
        Schema::dropIfExists('avances');
    }
}
