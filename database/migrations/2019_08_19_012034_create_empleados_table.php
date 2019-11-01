<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombres');
            $table->string('apellidos');
            $table->string('email');
            $table->string('rut');
            $table->integer('edad');
            $table->enum('genero',['Masculino','Femenino'])->default('Masculino');
            $table->enum('turno',['Mañana','Tarde','Noche'])->default('Mañana');
            $table->enum('status',['Activo','Reposo','Retirado'])->default('Activo');
            $table->unsignedBigInteger('id_area');

            $table->foreign('id_area')->references('id')->on('areas')->onDelete('cascade');
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
        Schema::dropIfExists('empleados');
    }
}
