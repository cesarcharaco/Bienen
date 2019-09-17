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
        	'elaborado' => 'María José Varas',
        	'aprobado' => 'Gabriel Olmos',
        	'num_contrato' => 9100008369,
        	'fechas' => '18-09-2019 al 24-09-2019',
            'semana' => 38,
        	'revision' => 'A',
            'id_gerencia' => 1
        ]);


    }
}
