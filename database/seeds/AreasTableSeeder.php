<?php

use Illuminate\Database\Seeder;

class AreasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('gerencias')->insert([
            'gerencia' => 'NPI'
        ]);
        \DB::table('gerencias')->insert([
            'gerencia' => 'CHO'
        ]);


        \DB::table('areas')->insert([
            'id_gerencia' => 1,
        	'area' => 'EWS',
            'ubicacion' => 'Planta Coloso-Antofagasta'
        ]);

        \DB::table('areas')->insert([
            'id_gerencia' => 1,
            'area' => 'Planto Cero',
            'ubicacion' => 'Planta Coloso-Antofagasta'
        ]);

        \DB::table('areas')->insert([
            'id_gerencia' => 1,
            'area' => 'Agua y Tranque',
            'ubicacion' => 'Feana-Mina'
        ]);

        \DB::table('areas')->insert([
            'id_gerencia' => 2,
            'area' => 'Filtro-Puerto',
            'ubicacion' => 'Planta Coloso-Antofagasta'
        ]);

        \DB::table('areas')->insert([
            'id_gerencia' => 2,
            'area' => 'ECT',
            'ubicacion' => 'Planta Coloso-Antofagasta'
        ]);

        \DB::table('areas')->insert([
            'id_gerencia' => 2,
            'area' => 'Los Colorados',
            'ubicacion' => 'Feana-Mina'
        ]);
    }
}
