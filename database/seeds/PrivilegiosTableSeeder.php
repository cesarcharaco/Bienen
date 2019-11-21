<?php

use Illuminate\Database\Seeder;

class PrivilegiosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//planificacion
        \DB::table('privilegios')->insert([
        	'modulo' => 'Planificación',
        	'privilegio' => 'Buscar'
        ]);

        \DB::table('privilegios')->insert([
        	'modulo' => 'Planificación',
        	'privilegio' => 'Registrar'
        ]);

        \DB::table('privilegios')->insert([
        	'modulo' => 'Planificación',
        	'privilegio' => 'Modificar'
        ]);

        \DB::table('privilegios')->insert([
        	'modulo' => 'Planificación',
        	'privilegio' => 'Eliminar'
        ]);

        //actividades
        \DB::table('privilegios')->insert([
        	'modulo' => 'Actividades',
        	'privilegio' => 'Ver'
        ]);

        \DB::table('privilegios')->insert([
        	'modulo' => 'Actividades',
        	'privilegio' => 'Registrar'
        ]);

        \DB::table('privilegios')->insert([
        	'modulo' => 'Actividades',
        	'privilegio' => 'Modificar'
        ]);

        \DB::table('privilegios')->insert([
        	'modulo' => 'Actividades',
        	'privilegio' => 'Eliminar'
        ]);

        //usuarios
        \DB::table('privilegios')->insert([
            'modulo' => 'Usuarios',
            'privilegio' => 'Listado'
        ]);

        \DB::table('privilegios')->insert([
            'modulo' => 'Usuarios',
            'privilegio' => 'Registrar'
        ]);

        \DB::table('privilegios')->insert([
            'modulo' => 'Usuarios',
            'privilegio' => 'Modificar'
        ]);

        \DB::table('privilegios')->insert([
            'modulo' => 'Usuarios',
            'privilegio' => 'Eliminar'
        ]);

        //Gráficas
        \DB::table('privilegios')->insert([
            'modulo' => 'Graficas',
            'privilegio' => 'Ver'
        ]);

        //Reportes
        \DB::table('privilegios')->insert([
            'modulo' => 'Reportes',
            'privilegio' => 'Excel'
        ]);

        \DB::table('privilegios')->insert([
            'modulo' => 'Reportes',
            'privilegio' => 'PDF'
        ]);
    }
}
