<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCursoCeroDanioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('curso_cero_danio', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_empleado');
            $table->enum('status',['Presentado','Pendiente'])->default('Presentado');
            $table->date('fecha_presentacion')->nullable();
            $table->string('mes');
            $table->text('observacion')->nullable();

            $table->foreign('id_empleado')->references('id')->on('empleados')->onDelete('cascade');
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
        Schema::dropIfExists('curso_cero_danio');
    }
}
