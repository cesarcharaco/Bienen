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
        for ($i=1; $i <= 20; $i++) { 
        	\DB::table('usuarios_has_privilegios')->insert([
        	'id_usuario' => 1,
        	'id_privilegio' => $i
            ]);
        }

        //--- Privilegio del usuario con ID 2 - Tipo Empleado --//
        for($i=1; $i<=12; $i++){
            \DB::table('usuarios_has_privilegios')->insert([
                'id_usuario' => 2,
                'id_privilegio' => $i,
                'status' => 'No'
            ]);
        }
        for($i=13; $i<=13; $i++){
            \DB::table('usuarios_has_privilegios')->insert([
                'id_usuario' => 2,
                'id_privilegio' => $i,
                'status' => 'Si'
            ]);
        }

        for($i=14; $i<=14; $i++){
            \DB::table('usuarios_has_privilegios')->insert([
                'id_usuario' => 2,
                'id_privilegio' => $i,
                'status' => 'No'
            ]);
        }
        for($i=15; $i<=17; $i++){
            \DB::table('usuarios_has_privilegios')->insert([
                'id_usuario' => 2,
                'id_privilegio' => $i,
                'status' => 'Si'
            ]);
        }
        for($i=18; $i<=20; $i++){
            \DB::table('usuarios_has_privilegios')->insert([
                'id_usuario' => 2,
                'id_privilegio' => $i,
                'status' => 'No'
            ]);
        }
    }
}
