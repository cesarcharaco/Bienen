<?php

use Illuminate\Database\Seeder;

class PlanificacionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('planificacion')->insert([
        	'titulo' => 'Limpieza de Baños',
        	'descripcion' => 'Limpieza de los baños del piso 2',
        	'id_departamento' => 3,
        	'turno' => 'Mañana',
        	'fecha_vencimiento' => '2019-08-20'
        ]);


    }
}
