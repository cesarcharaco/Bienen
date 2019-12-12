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
