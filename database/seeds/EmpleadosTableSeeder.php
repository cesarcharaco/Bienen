<?php

use Illuminate\Database\Seeder;

class EmpleadosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('empleados')->insert([
        	'nombres' => 'Francisco',
        	'apellidos' => 'Carpio',
        	'rut' => '123456789',
        	'edad' => 30,
        	'genero' => 'Masculino',
        	'turno' => 'Mañana',
        	'status' => 'Activo',
        	'id_area' => 1
        ]);

        \DB::table('empleados')->insert([
        	'nombres' => 'Martin',
        	'apellidos' => 'Perez',
        	'rut' => '123456783',
        	'edad' => 30,
        	'genero' => 'Masculino',
        	'turno' => 'Tarde',
        	'status' => 'Activo',
        	'id_area' => 2
        ]);

        \DB::table('empleados')->insert([
        	'nombres' => 'Maria',
        	'apellidos' => 'Tenepe',
        	'rut' => '123456784',
        	'edad' => 30,
        	'genero' => 'Femenino',
        	'turno' => 'Noche',
        	'status' => 'Activo',
        	'id_area' => 2
        ]);
    }
}
