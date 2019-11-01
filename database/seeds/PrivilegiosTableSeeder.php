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
        //usuarios
        \DB::table('privilegios')->insert([
        	'modulo' => 'Usuarios',
        	'privilegio' => 'Listar'
        ]);

        \DB::table('privilegios')->insert([
        	'modulo' => 'Usuarios',
        	'privilegio' => 'Buscar'
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

        \DB::table('privilegios')->insert([
        	'modulo' => 'Planificación',
        	'privilegio' => 'Aprobar'
        ]);

        \DB::table('privilegios')->insert([
        	'modulo' => 'Planificación',
        	'privilegio' => 'Reportes'
        ]);

        \DB::table('privilegios')->insert([
        	'modulo' => 'Planificación',
        	'privilegio' => 'PDF'
        ]);


        //actividades
        \DB::table('privilegios')->insert([
        	'modulo' => 'Actividades',
        	'privilegio' => 'Buscar'
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

        \DB::table('privilegios')->insert([
        	'modulo' => 'Actividades',
        	'privilegio' => 'Aprobar'
        ]);

        \DB::table('privilegios')->insert([
        	'modulo' => 'Actividades',
        	'privilegio' => 'Reportes'
        ]);

        \DB::table('privilegios')->insert([
        	'modulo' => 'Actividades',
        	'privilegio' => 'PDF'
        ]);
        //Graficas
        \DB::table('privilegios')->insert([
            'modulo' => 'Graficas',
            'privilegio' => 'Ver'
        ]);
    }
}
