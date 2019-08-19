<?php

use Illuminate\Database\Seeder;

class AreasDepTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('areas')->insert([
        	'area' => 'RRHH'
        ]);

        \DB::table('areas')->insert([
        	'area' => 'Administración'
        ]);

        \DB::table('areas')->insert([
        	'area' => 'Limpieza'
        ]);

        \DB::table('departamentos')->insert([
        	'departamento' => 'Nómina',
        	'id_area' => 1
        ]);

        \DB::table('departamentos')->insert([
        	'departamento' => 'Contabilidad',
        	'id_area' => 2
        ]);

        \DB::table('departamentos')->insert([
        	'departamento' => 'Aseo Exterior',
        	'id_area' => 3
        ]);
    }
}
