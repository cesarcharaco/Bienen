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
            'fechas' => '25-12-2019 al 31-12-2019',
            'semana' => 52,
            'revision' => 'A',
            'id_gerencia' => 1
        ]);

        \DB::table('planificacion')->insert([
            'elaborado' => 'María José Varas',
            'aprobado' => 'Gabriel Olmos',
            'num_contrato' => 9100008366,
            'fechas' => '01-01-2020 al 07-01-2020',
            'semana' => 1,
            'revision' => 'A',
            'id_gerencia' => 1
        ]);
        \DB::table('planificacion')->insert([
            'elaborado' => 'María José Varas',
            'aprobado' => 'Gabriel Olmos',
            'num_contrato' => 9100008366,
            'fechas' => '08-01-2020 al 14-01-2020',
            'semana' => 2,
            'revision' => 'A',
            'id_gerencia' => 1
        ]);
        \DB::table('planificacion')->insert([
            'elaborado' => 'María José Varas',
            'aprobado' => 'Gabriel Olmos',
            'num_contrato' => 9100008366,
            'fechas' => '15-01-2020 al 21-01-2020',
            'semana' => 3,
            'revision' => 'A',
            'id_gerencia' => 1
        ]);
        \DB::table('planificacion')->insert([
            'elaborado' => 'María José Varas',
            'aprobado' => 'Gabriel Olmos',
            'num_contrato' => 9100008366,
            'fechas' => '22-01-2020 al 28-01-2020',
            'semana' => 4,
            'revision' => 'A',
            'id_gerencia' => 1
        ]);
        \DB::table('planificacion')->insert([
            'elaborado' => 'María José Varas',
            'aprobado' => 'Gabriel Olmos',
            'num_contrato' => 9100008366,
            'fechas' => '29-01-2020 al 04-02-2020',
            'semana' => 5,
            'revision' => 'A',
            'id_gerencia' => 1
        ]);
        \DB::table('planificacion')->insert([
            'elaborado' => 'María José Varas',
            'aprobado' => 'Gabriel Olmos',
            'num_contrato' => 9100008366,
            'fechas' => '05-02-2020 al 11-11-2020',
            'semana' => 6,
            'revision' => 'A',
            'id_gerencia' => 1
        ]);
        \DB::table('planificacion')->insert([
            'elaborado' => 'María José Varas',
            'aprobado' => 'Gabriel Olmos',
            'num_contrato' => 9100008366,
            'fechas' => '12-02-2020 al 18-02-2020',
            'semana' => 7,
            'revision' => 'A',
            'id_gerencia' => 1
        ]);

    }
}
