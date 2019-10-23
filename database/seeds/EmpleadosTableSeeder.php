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

        \DB::table('empleados')->insert([
            'nombres' => 'Elena',
            'apellidos' => 'Ruiz',
            'rut' => '123456701',
            'edad' => 25,
            'genero' => 'Femenino',
            'turno' => 'Tarde',
            'status' => 'Activo',
            'id_area' => 3
        ]);

        \DB::table('empleados')->insert([
            'nombres' => 'Jose',
            'apellidos' => 'Ruiz',
            'rut' => '123456702',
            'edad' => 25,
            'genero' => 'Masculino',
            'turno' => 'Tarde',
            'status' => 'Activo',
            'id_area' => 3
        ]);

        \DB::table('empleados')->insert([
            'nombres' => 'Pedro',
            'apellidos' => 'Perez',
            'rut' => '123456703',
            'edad' => 35,
            'genero' => 'Masculino',
            'turno' => 'Tarde',
            'status' => 'Activo',
            'id_area' => 4
        ]);

        \DB::table('empleados')->insert([
            'nombres' => 'Leidy',
            'apellidos' => 'Alvarez',
            'rut' => '123456704',
            'edad' => 35,
            'genero' => 'Femenino',
            'turno' => 'Mañana',
            'status' => 'Activo',
            'id_area' => 4
        ]);

        \DB::table('empleados')->insert([
            'nombres' => 'Liliana',
            'apellidos' => 'Rivero',
            'rut' => '123456705',
            'edad' => 27,
            'genero' => 'Femenino',
            'turno' => 'Mañana',
            'status' => 'Activo',
            'id_area' => 5
        ]);

        \DB::table('empleados')->insert([
            'nombres' => 'Jose',
            'apellidos' => 'Rivero',
            'rut' => '123456706',
            'edad' => 35,
            'genero' => 'Masculino',
            'turno' => 'Mañana',
            'status' => 'Activo',
            'id_area' => 5
        ]);

        \DB::table('empleados')->insert([
            'nombres' => 'Manuel',
            'apellidos' => 'Telles',
            'rut' => '123456707',
            'edad' => 30,
            'genero' => 'Masculino',
            'turno' => 'Tarde',
            'status' => 'Activo',
            'id_area' => 5
        ]);

        \DB::table('empleados')->insert([
            'nombres' => 'Ana',
            'apellidos' => 'Cabello',
            'rut' => '123456708',
            'edad' => 35,
            'genero' => 'Femenino',
            'turno' => 'Noche',
            'status' => 'Activo',
            'id_area' => 5
        ]);

        \DB::table('empleados')->insert([
            'nombres' => 'Juana',
            'apellidos' => 'Del Mar',
            'rut' => '123456709',
            'edad' => 35,
            'genero' => 'Femenino',
            'turno' => 'Mañana',
            'status' => 'Activo',
            'id_area' => 6
        ]);

        \DB::table('empleados')->insert([
            'nombres' => 'Carlos',
            'apellidos' => 'Tovar',
            'rut' => '123456710',
            'edad' => 35,
            'genero' => 'Masculino',
            'turno' => 'Mañana',
            'status' => 'Activo',
            'id_area' => 6
        ]);

        \DB::table('empleados')->insert([
            'nombres' => 'Ramiro',
            'apellidos' => 'Rodriguez',
            'rut' => '123456711',
            'edad' => 35,
            'genero' => 'Masculino',
            'turno' => 'Mañana',
            'status' => 'Activo',
            'id_area' => 6
        ]);

        \DB::table('empleados')->insert([
            'nombres' => 'Diego',
            'apellidos' => 'Gomez',
            'rut' => '123456712',
            'edad' => 35,
            'genero' => 'Masculino',
            'turno' => 'Mañana',
            'status' => 'Activo',
            'id_area' => 1
        ]);

        \DB::table('empleados')->insert([
            'nombres' => 'Pablo',
            'apellidos' => 'Tovar',
            'rut' => '123456713',
            'edad' => 35,
            'genero' => 'Masculino',
            'turno' => 'Mañana',
            'status' => 'Activo',
            'id_area' => 1
        ]);

        \DB::table('empleados')->insert([
            'nombres' => 'Luis',
            'apellidos' => 'Hurtado',
            'rut' => '123456714',
            'edad' => 35,
            'genero' => 'Masculino',
            'turno' => 'Mañana',
            'status' => 'Activo',
            'id_area' => 2
        ]);

        \DB::table('empleados')->insert([
            'nombres' => 'Lionel',
            'apellidos' => 'Messi',
            'rut' => '123456715',
            'edad' => 35,
            'genero' => 'Masculino',
            'turno' => 'Mañana',
            'status' => 'Activo',
            'id_area' => 2
        ]);

        \DB::table('empleados')->insert([
            'nombres' => 'Josef',
            'apellidos' => 'Martinez',
            'rut' => '123456716',
            'edad' => 35,
            'genero' => 'Masculino',
            'turno' => 'Tarde',
            'status' => 'Activo',
            'id_area' => 3
        ]);

        \DB::table('empleados')->insert([
            'nombres' => 'Yeferson',
            'apellidos' => 'Soteldo',
            'rut' => '123456717',
            'edad' => 35,
            'genero' => 'Masculino',
            'turno' => 'Mañana',
            'status' => 'Activo',
            'id_area' => 3
        ]);

        \DB::table('empleados')->insert([
            'nombres' => 'Wilker',
            'apellidos' => 'Fariñez',
            'rut' => '123456718',
            'edad' => 35,
            'genero' => 'Masculino',
            'turno' => 'Mañana',
            'status' => 'Activo',
            'id_area' => 4
        ]);
    }
}
