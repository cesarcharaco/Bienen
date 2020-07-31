<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        \DB::table('users')->insert([
            'name' => 'R Portilla',
            'email' => 'r.portilla@licancabur.cl',
            'password' => bcrypt('123456'),
            'tipo_user' => 'Admin',
        ]);

        \DB::table('users')->insert([
            'name' => 'G Olmos',
            'email' => 'g.olmos@licancabur.c',
            'password' => bcrypt('123456'),
            'tipo_user' => 'Supervisor'
        ]);

        \DB::table('users')->insert([
        	'name' => 'María José Varas',
        	'email' => 'm.varas@licancabur.cl',
        	'password' => bcrypt('123456'),
        	'tipo_user' => 'Planificacion',
        ]);

        \DB::table('users')->insert([
            'name' => 'A Portilla',
            'email' => 'a.portilla@licancabur.cl',
            'password' => bcrypt('123456'),
            'tipo_user' => 'Recursos humanos',
        ]);

        \DB::table('users')->insert([
            'name' => 'Terreno',
            'email' => 'terreno@licancabur.cl',
            'password' => bcrypt('123456'),
            'tipo_user' => 'Empleado'
        ]);



// //----------------------------------SUPER USER EICHE-------------------------
        \DB::table('users')->insert([
            'name' => 'Administrador EICHE',
            'email' => 'Admin@eiche.cl',
            'password' => bcrypt('123456'),
            'tipo_user' => 'Admin',
            'superUser' => 'Eiche'
        ]);

        \DB::table('users')->insert([
            'name' => 'Licancabur',
            'email' => 'ViewMel@licancabur.cl',
            'password' => bcrypt('MEL1234'),
            'tipo_user' => 'Admin'
            // 'superUser' => 'Eiche'
        ]);

// //----------------------------------USER NPI - CHO-------------------------
        \DB::table('users')->insert([
            'name' => 'MELNPI',
            'email' => 'melnpi@licancabur.cl',
            'password' => bcrypt('NPI.1q2w3e'),
            'tipo_user' => 'G-NPI'
            // 'superUser' => 'Eiche'
        ]);

        \DB::table('users')->insert([
            'name' => 'MELCHO',
            'email' => 'melcho@licancabur.cl',
            'password' => bcrypt('CHO.1q2we'),
            'tipo_user' => 'G-CHO'
            // 'superUser' => 'Eiche'
        ]);
    }
}
