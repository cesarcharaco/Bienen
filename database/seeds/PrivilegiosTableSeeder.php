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


        // ID 1
        \DB::table('privilegios')->insert([
        	'modulo' => 'Planificación',
        	'privilegio' => 'Buscar'
        ]);

        // ID 2
        \DB::table('privilegios')->insert([
        	'modulo' => 'Planificación',
        	'privilegio' => 'Registrar'
        ]);

        //ID 3
        \DB::table('privilegios')->insert([
        	'modulo' => 'Planificación',
        	'privilegio' => 'Modificar'
        ]);

        //ID 4
        \DB::table('privilegios')->insert([
        	'modulo' => 'Planificación',
        	'privilegio' => 'Eliminar'
        ]);

        //actividades
        //ID 5
        \DB::table('privilegios')->insert([
        	'modulo' => 'Actividades',
        	'privilegio' => 'Ver'
        ]);

        //ID 6
        \DB::table('privilegios')->insert([
        	'modulo' => 'Actividades',
        	'privilegio' => 'Registrar'
        ]);

        //ID 7
        \DB::table('privilegios')->insert([
            'modulo' => 'Actividades',
            'privilegio' => 'Registro de PM03'
        ]);

        //ID 8
        \DB::table('privilegios')->insert([
        	'modulo' => 'Actividades',
        	'privilegio' => 'Modificar'
        ]);

        //ID 9
        \DB::table('privilegios')->insert([
            'modulo' => 'Actividades',
            'privilegio' => 'Asignar'
        ]);

        //ID 10
        \DB::table('privilegios')->insert([
        	'modulo' => 'Actividades',
        	'privilegio' => 'Eliminar'
        ]);

        //usuarios
        //ID 11
        \DB::table('privilegios')->insert([
            'modulo' => 'Usuarios',
            'privilegio' => 'Listado'
        ]);

        //ID 12
        \DB::table('privilegios')->insert([
            'modulo' => 'Usuarios',
            'privilegio' => 'Registrar'
        ]);

        //ID 13
        \DB::table('privilegios')->insert([
            'modulo' => 'Usuarios',
            'privilegio' => 'Modificar'
        ]);

        //ID 14
        \DB::table('privilegios')->insert([
            'modulo' => 'Usuarios',
            'privilegio' => 'Eliminar'
        ]);



        //------------------------------- ID 15

        \DB::table('privilegios')->insert([
            'modulo' => 'Usuarios',
            'privilegio' => 'Ver datos laborales'
        ]);
        //ID 16
        \DB::table('privilegios')->insert([
            'modulo' => 'Usuarios',
            'privilegio' => 'Ver examenes'
        ]);



        //------------------------------- ID 17

        \DB::table('privilegios')->insert([
            'modulo' => 'Usuarios',
            'privilegio' => 'Ver curso cero daño'
        ]);






        //Gráficas
        //ID 18
        \DB::table('privilegios')->insert([
            'modulo' => 'Graficas',
            'privilegio' => 'Ver'
        ]);

        //Reportes
        //ID 19
        \DB::table('privilegios')->insert([
            'modulo' => 'Reportes',
            'privilegio' => 'Excel'
        ]);

        //ID 20
        \DB::table('privilegios')->insert([
            'modulo' => 'Reportes',
            'privilegio' => 'PDF'
        ]);

        //ID 21
        \DB::table('privilegios')->insert([
            'modulo' => 'Areas',
            'privilegio' => 'Listado'
        ]);

        //ID 22
        \DB::table('privilegios')->insert([
            'modulo' => 'Areas',
            'privilegio' => 'Registrar'
        ]);

        //ID 23
        \DB::table('privilegios')->insert([
            'modulo' => 'Areas',
            'privilegio' => 'Editar'
        ]);

        //ID 24
        \DB::table('privilegios')->insert([
            'modulo' => 'Areas',
            'privilegio' => 'Eliminar'
        ]);

        //ID 25
        \DB::table('privilegios')->insert([
            'modulo' => 'Gerencias',
            'privilegio' => 'Listado'
        ]);

        //ID 26
        \DB::table('privilegios')->insert([
            'modulo' => 'Gerencias',
            'privilegio' => 'Registrar'
        ]);

        //ID 27
        \DB::table('privilegios')->insert([
            'modulo' => 'Gerencias',
            'privilegio' => 'Editar'
        ]);

        //ID 28
        \DB::table('privilegios')->insert([
            'modulo' => 'Gerencias',
            'privilegio' => 'Eliminar'
        ]);

        //ID 29
        \DB::table('privilegios')->insert([
            'modulo' => 'Departamentos',
            'privilegio' => 'Listado'
        ]);

        //ID 30
        \DB::table('privilegios')->insert([
            'modulo' => 'Departamentos',
            'privilegio' => 'Registrar'
        ]);

        //ID 31
        \DB::table('privilegios')->insert([
            'modulo' => 'Departamentos',
            'privilegio' => 'Editar'
        ]);

        //ID 32
        \DB::table('privilegios')->insert([
            'modulo' => 'Departamentos',
            'privilegio' => 'Eliminar'
        ]);

        //ID 33
        \DB::table('privilegios')->insert([
            'modulo' => 'Actividades - PM01',
            'privilegio' => 'General'
        ]);

        //ID 34
        \DB::table('privilegios')->insert([
            'modulo' => 'Actividades - PM02',
            'privilegio' => 'General'
        ]);

        //ID 35
        \DB::table('privilegios')->insert([
            'modulo' => 'Actividades - PM04',
            'privilegio' => 'General'
        ]);

         //ID 36
        \DB::table('privilegios')->insert([
            'modulo' => 'Estadisticas',
            'privilegio' => 'Por Ejecucion'
        ]);

        //ID 37
        \DB::table('privilegios')->insert([
            'modulo' => 'Estadisticas',
            'privilegio' => 'Por HH'
        ]);
    }
}
