<?php

use Illuminate\Database\Seeder;

class UsuariosPrivilegiosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i <= 19; $i++) { 
        	\DB::table('usuarios_has_privilegios')->insert([
        	'id_usuario' => 1,
        	'id_privilegio' => $i
        ]);
        }

       	\DB::table('usuarios_has_privilegios')->insert([
        	'id_usuario' => 2,
        	'id_privilegio' => 13
        ]);

        for ($i=15; $i <= 17; $i++) { 
            \DB::table('usuarios_has_privilegios')->insert([
            'id_usuario' => 2,
            'id_privilegio' => $i
        ]);
        }
    }
}
