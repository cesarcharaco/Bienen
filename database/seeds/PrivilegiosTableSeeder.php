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
            'privilegio' => 'Registro de PM03'
        ]);

        \DB::table('privilegios')->insert([
        	'modulo' => 'Actividades',
        	'privilegio' => 'Modificar'
        ]);

        \DB::table('privilegios')->insert([
            'modulo' => 'Actividades',
            'privilegio' => 'Asignar'
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
        \DB::table('privilegios')->insert([
            'modulo' => 'Usuarios',
            'privilegio' => 'Ver datos laborales'
        ]);
        \DB::table('privilegios')->insert([
            'modulo' => 'Usuarios',
            'privilegio' => 'Ver examenes'
        ]);
        \DB::table('privilegios')->insert([
            'modulo' => 'Usuarios',
            'privilegio' => 'Ver curso cero daño'
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

        \DB::table('privilegios')->insert([
            'modulo' => 'Areas',
            'privilegio' => 'Listado'
        ]);
        \DB::table('privilegios')->insert([
            'modulo' => 'Areas',
            'privilegio' => 'Registrar'
        ]);
        \DB::table('privilegios')->insert([
            'modulo' => 'Areas',
            'privilegio' => 'Editar'
        ]);
        \DB::table('privilegios')->insert([
            'modulo' => 'Areas',
            'privilegio' => 'Eliminar'
        ]);

        \DB::table('privilegios')->insert([
            'modulo' => 'Gerencias',
            'privilegio' => 'Listado'
        ]);
        \DB::table('privilegios')->insert([
            'modulo' => 'Gerencias',
            'privilegio' => 'Registrar'
        ]);
        \DB::table('privilegios')->insert([
            'modulo' => 'Gerencias',
            'privilegio' => 'Editar'
        ]);
        \DB::table('privilegios')->insert([
            'modulo' => 'Gerencias',
            'privilegio' => 'Eliminar'
        ]);

        \DB::table('privilegios')->insert([
            'modulo' => 'Departamentos',
            'privilegio' => 'Listado'
        ]);
        \DB::table('privilegios')->insert([
            'modulo' => 'Departamentos',
            'privilegio' => 'Registrar'
        ]);
        \DB::table('privilegios')->insert([
            'modulo' => 'Departamentos',
            'privilegio' => 'Editar'
        ]);
        \DB::table('privilegios')->insert([
            'modulo' => 'Departamentos',
            'privilegio' => 'Eliminar'
        ]);
        \DB::table('privilegios')->insert([
            'modulo' => 'Actividades - PM01',
            'privilegio' => 'General'
        ]);
        \DB::table('privilegios')->insert([
            'modulo' => 'Actividades - PM02',
            'privilegio' => 'General'
        ]);
        \DB::table('privilegios')->insert([
            'modulo' => 'Actividades - PM04',
            'privilegio' => 'General'
        ]);
    }
}
