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
        	'fechas' => '27-11-2019 al 03-12-2019',
            'semana' => 48,
        	'revision' => 'A',
            'id_gerencia' => 1
        ]);

        \DB::table('planificacion')->insert([
            'elaborado' => 'María José Varas',
            'aprobado' => 'Gabriel Olmos',
            'num_contrato' => 9100008369,
            'fechas' => '04-12-2019 al 10-12-2019',
            'semana' => 49,
            'revision' => 'A',
            'id_gerencia' => 1
        ]);

        \DB::table('planificacion')->insert([
            'elaborado' => 'María José Varas',
            'aprobado' => 'Gabriel Olmos',
            'num_contrato' => 9100008368,
            'fechas' => '11-12-2019 al 17-12-2019',
            'semana' => 50,
            'revision' => 'A',
            'id_gerencia' => 1
        ]);

        \DB::table('planificacion')->insert([
            'elaborado' => 'María José Varas',
            'aprobado' => 'Gabriel Olmos',
            'num_contrato' => 9100008367,
            'fechas' => '18-12-2019 al 24-12-2019',
            'semana' => 51,
            'revision' => 'A',
            'id_gerencia' => 1
        ]);

        \DB::table('planificacion')->insert([
            'elaborado' => 'María José Varas',
            'aprobado' => 'Gabriel Olmos',
            'num_contrato' => 9100008366,
            'fechas' => '18-12-2019 al 24-12-2019',
            'semana' => 51,
            'revision' => 'A',
            'id_gerencia' => 2
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
