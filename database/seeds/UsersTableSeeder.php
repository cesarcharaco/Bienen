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
        	'name' => 'María José Varas',
        	'email' => 'm.varas@licancabur.cl',
        	'password' => bcrypt('123456'),
        	'tipo_user' => 'Admin',
        ]);

        \DB::table('users')->insert([
            'name' => 'Francisco Carpio',
            'email' => 'franciscocarpio@gmail.com',
            'password' => bcrypt('123456'),
            'tipo_user' => 'Empleado'
        ]);

        \DB::table('users')->insert([
            'name' => 'Admin de Empleado',
            'email' => 'admin_empleado@gmail.com',
            'password' => bcrypt('123456'),
            'tipo_user' => 'Admin de Empleado'
        ]);


//----------------------------------SUPER USER EICHE-------------------------
        \DB::table('users')->insert([
            'name' => 'Administrador EICHE',
            'email' => 'Admin@eiche.cl',
            'password' => bcrypt('123456'),
            'tipo_user' => 'Admin',
            'superUser' => 'Eiche'
        ]);
    }
}
