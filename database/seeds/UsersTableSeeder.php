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
        	'name' => 'Administrador',
        	'email' => 'admin@gmail.com',
        	'password' => bcrypt('123456'),
        	'tipo_user' => 'Admin'
        ]);

        \DB::table('users')->insert([
            'name' => 'Francisco Carpio',
            'email' => 'franciscocarpio@gmail.com',
            'password' => bcrypt('123456'),
            'tipo_user' => 'Empleado'
        ]);
    }
}
