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
            'id_usuario'=>1,
            'nombres' => 'María José',
            'apellidos' => 'Varas',
            'email' => 'm.varas@licancabur.cl',
            'rut' => '122456789',
            'edad' => 30,
            'genero' => 'Masculino',
            'status' => 'Activo'
        ]);
        //examenes
        for ($i=1; $i <= 5; $i++) { 
            \DB::table('empleados_has_examenes')->insert([
                'id_empleado'=> 1,
                'id_examen' => $i,
                'fecha' => '2019-01-15'
            ]);
            
        }
        //fin examens
        //curso no daño
        for ($i=1; $i <= 12; $i++) { 
            \DB::table('curso_cero_danio')->insert([
                'id_empleado' => 1,
                'status'=> 'Pendiente',
                'mes' => $i
            ]);
        }
        //fin curso no danio
        //datos laborales
            \DB::table('datos_laborales')->insert([
            'id_empleado'=> 1,
            'fechae_licn' => '2018-04-01',
            'fechav_licn' => '2023-04-01' 
            ]);
        //fin datos laborales
        \DB::table('empleados_has_areas')->insert([
            'id_empleado'=> 1,
            'id_area' => 1
        ]);
        \DB::table('empleados_has_areas')->insert([
            'id_empleado'=> 1,
            'id_area' => 2
        ]);
        \DB::table('empleados_has_areas')->insert([
            'id_empleado'=> 1,
            'id_area' => 3
        ]);
        \DB::table('empleados_has_areas')->insert([
            'id_empleado'=> 1,
            'id_area' => 4
        ]);
        \DB::table('empleados_has_areas')->insert([
            'id_empleado'=> 1,
            'id_area' => 5
        ]);
        \DB::table('empleados_has_areas')->insert([
            'id_empleado'=> 1,
            'id_area' => 6
        ]);
        
        \DB::table('empleados_has_departamentos')->insert([
            'id_empleado'=> 1,
            'id_departamento' => 2
        ]);
        \DB::table('empleados_has_departamentos')->insert([
            'id_empleado'=> 1,
            'id_departamento' => 3
        ]);
        \DB::table('empleados_has_departamentos')->insert([
            'id_empleado'=> 1,
            'id_departamento' => 4
        ]);
        \DB::table('empleados_has_departamentos')->insert([
            'id_empleado'=> 1,
            'id_departamento' => 5
        ]);
        \DB::table('empleados_has_departamentos')->insert([
            'id_empleado'=> 1,
            'id_departamento' => 6
        ]);
        \DB::table('empleados')->insert([
            'id_usuario'=>2,
        	'nombres' => 'Francisco',
        	'apellidos' => 'Carpio',
            'email' => 'franciscocarpio@gmail.com',
        	'rut' => '123456789',
        	'edad' => 30,
        	'genero' => 'Masculino',
        	'status' => 'Activo'
        ]);
        //examenes
        for ($i=1; $i <= 5; $i++) { 
            \DB::table('empleados_has_examenes')->insert([
                'id_empleado'=> 2,
                'id_examen' => $i,
                'fecha' => '2019-06-15'
            ]);
            
        }
        //fin examens
        //curso no daño
        for ($i=1; $i <= 12; $i++) { 
            \DB::table('curso_cero_danio')->insert([
                'id_empleado' => 2,
                'status'=> 'Pendiente',
                'mes' => $i
            ]);
        }
        //fin curso no danio
        //datos laborales
            \DB::table('datos_laborales')->insert([
            'id_empleado'=> 1,
            'fechae_licn' => '2015-04-01',
            'fechav_licn' => '2020-04-01' 
            ]);
        //fin datos laborales
        \DB::table('empleados_has_areas')->insert([
            'id_empleado'=>2,
        	'id_area' => 1
        ]);
        \DB::table('empleados_has_areas')->insert([
            'id_empleado'=>2,
            'id_area' => 2
        ]);
        \DB::table('empleados_has_areas')->insert([
            'id_empleado'=>2,
            'id_area' => 4
        ]);

        \DB::table('empleados_has_departamentos')->insert([
            'id_empleado'=>2,
            'id_departamento' => 2
        ]);
        \DB::table('empleados_has_departamentos')->insert([
            'id_empleado'=>2,
            'id_departamento' => 4
        ]);

        \DB::table('empleados')->insert([
            'id_usuario'=>3,
            'nombres' => 'Admin',
            'apellidos' => 'Empleado',
            'email' => 'admin_empleado@gmail.com',
            'rut' => '12345189',
            'edad' => 30,
            'genero' => 'Masculino',
            'status' => 'Activo'
        ]);
        //examenes
        for ($i=1; $i <= 5; $i++) { 
            \DB::table('empleados_has_examenes')->insert([
                'id_empleado'=> 3,
                'id_examen' => $i,
                'fecha' => '2019-05-15'
            ]);
            
        }
        //fin examens
        //curso no daño
        for ($i=1; $i <= 12; $i++) { 
            \DB::table('curso_cero_danio')->insert([
                'id_empleado' => 3,
                'status'=> 'Pendiente',
                'mes' => $i
            ]);
        }
        //fin curso no danio
        //datos laborales
            \DB::table('datos_laborales')->insert([
            'id_empleado'=> 3,
            'fechae_licn' => '2016-04-01',
            'fechav_licn' => '2021-04-01' 
            ]);
        //fin datos laborales
        \DB::table('empleados_has_areas')->insert([
            'id_empleado'=>3,
            'id_area' => 1
        ]);
        \DB::table('empleados_has_areas')->insert([
            'id_empleado'=>3,
            'id_area' => 2
        ]);
        \DB::table('empleados_has_areas')->insert([
            'id_empleado'=>3,
            'id_area' => 4
        ]);

        \DB::table('empleados_has_departamentos')->insert([
            'id_empleado'=>3,
            'id_departamento' => 2
        ]);
        \DB::table('empleados_has_departamentos')->insert([
            'id_empleado'=>3,
            'id_departamento' => 4
        ]);

        /*\DB::table('empleados')->insert([
            'id_usuario'=>4,
        	'nombres' => 'Maria',
        	'apellidos' => 'Tenepe',
            'email' => '',
        	'rut' => '123456784',
        	'edad' => 30,
        	'genero' => 'Femenino',
        	'status' => 'Activo',
        	'id_area' => 2
        ]);

        \DB::table('empleados')->insert([
            'id_usuario'=>5,
            'nombres' => 'Elena',
            'apellidos' => 'Ruiz',
            'email' => '',
            'rut' => '123456701',
            'edad' => 25,
            'genero' => 'Femenino',
            'status' => 'Activo',
            'id_area' => 3
        ]);

        \DB::table('empleados')->insert([
            'id_usuario'=>6,
            'nombres' => 'Jose',
            'apellidos' => 'Ruiz',
            'email' => '',
            'rut' => '123456702',
            'edad' => 25,
            'genero' => 'Masculino',
            'status' => 'Activo',
            'id_area' => 3
        ]);

        \DB::table('empleados')->insert([
            'id_usuario'=>7,
            'nombres' => 'Pedro',
            'apellidos' => 'Perez',
            'email' => '',
            'rut' => '123456703',
            'edad' => 35,
            'genero' => 'Masculino',
            'status' => 'Activo',
            'id_area' => 4
        ]);

        \DB::table('empleados')->insert([
            'id_usuario'=>8,
            'nombres' => 'Leidy',
            'apellidos' => 'Alvarez',
            'email' => '',
            'rut' => '123456704',
            'edad' => 35,
            'genero' => 'Femenino',
            'status' => 'Activo',
            'id_area' => 4
        ]);

        \DB::table('empleados')->insert([
            'id_usuario'=>9,
            'nombres' => 'Liliana',
            'apellidos' => 'Rivero',
            'email' => '',
            'rut' => '123456705',
            'edad' => 27,
            'genero' => 'Femenino',
            'status' => 'Activo',
            'id_area' => 5
        ]);

        \DB::table('empleados')->insert([
            'id_usuario'=>10,
            'nombres' => 'Jose',
            'apellidos' => 'Rivero',
            'email' => '',
            'rut' => '123456706',
            'edad' => 35,
            'genero' => 'Masculino',
            'status' => 'Activo',
            'id_area' => 5
        ]);

        \DB::table('empleados')->insert([
            'id_usuario'=>11,
            'nombres' => 'Manuel',
            'apellidos' => 'Telles',
            'email' => '',
            'rut' => '123456707',
            'edad' => 30,
            'genero' => 'Masculino',
            'status' => 'Activo',
            'id_area' => 5
        ]);

        \DB::table('empleados')->insert([
            'id_usuario'=>12,
            'nombres' => 'Ana',
            'apellidos' => 'Cabello',
            'email' => '',
            'rut' => '123456708',
            'edad' => 35,
            'genero' => 'Femenino',
            'status' => 'Activo',
            'id_area' => 5
        ]);

        \DB::table('empleados')->insert([
            'id_usuario'=>13,
            'nombres' => 'Juana',
            'apellidos' => 'Del Mar',
            'email' => '',
            'rut' => '123456709',
            'edad' => 35,
            'genero' => 'Femenino',
            'status' => 'Activo',
            'id_area' => 6
        ]);

        \DB::table('empleados')->insert([
            'id_usuario'=>14,
            'nombres' => 'Carlos',
            'apellidos' => 'Tovar',
            'email' => '',
            'rut' => '123456710',
            'edad' => 35,
            'genero' => 'Masculino',
            'status' => 'Activo',
            'id_area' => 6
        ]);

        \DB::table('empleados')->insert([
            'id_usuario'=>15,
            'nombres' => 'Ramiro',
            'apellidos' => 'Rodriguez',
            'email' => '',
            'rut' => '123456711',
            'edad' => 35,
            'genero' => 'Masculino',
            'status' => 'Activo',
            'id_area' => 6
        ]);

        \DB::table('empleados')->insert([
            'id_usuario'=>16,
            'nombres' => 'Diego',
            'apellidos' => 'Gomez',
            'email' => '',
            'rut' => '123456712',
            'edad' => 35,
            'genero' => 'Masculino',
            'status' => 'Activo',
            'id_area' => 1
        ]);

        \DB::table('empleados')->insert([
            'id_usuario'=>17,
            'nombres' => 'Pablo',
            'apellidos' => 'Tovar',
            'email' => '',
            'rut' => '123456713',
            'edad' => 35,
            'genero' => 'Masculino',
            'status' => 'Activo',
            'id_area' => 1
        ]);

        \DB::table('empleados')->insert([
            'id_usuario'=>18,
            'nombres' => 'Luis',
            'apellidos' => 'Hurtado',
            'email' => '',
            'rut' => '123456714',
            'edad' => 35,
            'genero' => 'Masculino',
            'status' => 'Activo',
            'id_area' => 2
        ]);

        \DB::table('empleados')->insert([
            'id_usuario'=>19,
            'nombres' => 'Lionel',
            'apellidos' => 'Messi',
            'email' => '',
            'rut' => '123456715',
            'edad' => 35,
            'genero' => 'Masculino',
            'status' => 'Activo',
            'id_area' => 2
        ]);

        \DB::table('empleados')->insert([
            'id_usuario'=>20,
            'nombres' => 'Josef',
            'apellidos' => 'Martinez',
            'email' => '',
            'rut' => '123456716',
            'edad' => 35,
            'genero' => 'Masculino',
            'status' => 'Activo',
            'id_area' => 3
        ]);

        \DB::table('empleados')->insert([
            'id_usuario'=>21,
            'nombres' => 'Yeferson',
            'apellidos' => 'Soteldo',
            'email' => '',
            'rut' => '123456717',
            'edad' => 35,
            'genero' => 'Masculino',
            'status' => 'Activo',
            'id_area' => 3
        ]);

        \DB::table('empleados')->insert([
            'id_usuario'=>22,
            'nombres' => 'Wilker',
            'apellidos' => 'Fariñez',
            'email' => '',
            'rut' => '123456718',
            'edad' => 35,
            'genero' => 'Masculino',
            'status' => 'Activo',
            'id_area' => 4
        ]);*/
    }
}
