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
        	'fechas' => '16-10-2019 al 22-10-2019',
            'semana' => 42,
        	'revision' => 'A',
            'id_gerencia' => 1
        ]);

        \DB::table('planificacion')->insert([
            'elaborado' => 'María José Varas',
            'aprobado' => 'Gabriel Olmos',
            'num_contrato' => 9100008369,
            'fechas' => '23-10-2019 al 29-10-2019',
            'semana' => 43,
            'revision' => 'A',
            'id_gerencia' => 1
        ]);

        \DB::table('planificacion')->insert([
            'elaborado' => 'María José Varas',
            'aprobado' => 'Gabriel Olmos',
            'num_contrato' => 9100008368,
            'fechas' => '30-10-2019 al 05-11-2019',
            'semana' => 44,
            'revision' => 'A',
            'id_gerencia' => 1
        ]);

        \DB::table('planificacion')->insert([
            'elaborado' => 'María José Varas',
            'aprobado' => 'Gabriel Olmos',
            'num_contrato' => 9100008367,
            'fechas' => '06-11-2019 al 12-11-2019',
            'semana' => 45,
            'revision' => 'A',
            'id_gerencia' => 1
        ]);

        \DB::table('planificacion')->insert([
            'elaborado' => 'María José Varas',
            'aprobado' => 'Gabriel Olmos',
            'num_contrato' => 9100008366,
            'fechas' => '13-11-2019 al 19-11-2019',
            'semana' => 46,
            'revision' => 'A',
            'id_gerencia' => 1
        ]);

        \DB::table('planificacion')->insert([
            'elaborado' => 'María José Varas',
            'aprobado' => 'Gabriel Olmos',
            'num_contrato' => 9100008365,
            'fechas' => '20-11-2019 al 26-11-2019',
            'semana' => 47,
            'revision' => 'A',
            'id_gerencia' => 1
        ]);


    }
}
