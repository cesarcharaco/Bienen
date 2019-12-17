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
        for ($i=1; $i <=14; $i++) { 
        	\DB::table('usuarios_has_privilegios')->insert([
        	'id_usuario' => 1,
        	'id_privilegio' => $i
            ]);
        }
        for ($i=15; $i <= 17; $i++) { 
            \DB::table('usuarios_has_privilegios')->insert([
            'id_usuario' => 1,
            'id_privilegio' => $i,
            'status' => 'No'
            ]);
        }
        for ($i=18; $i <= 32; $i++) { 
            \DB::table('usuarios_has_privilegios')->insert([
            'id_usuario' => 1,
            'id_privilegio' => $i
            ]);
        }

        //--- Privilegio del usuario con ID 2 - Tipo Empleado --//
        for($i=1; $i<=4; $i++){
            \DB::table('usuarios_has_privilegios')->insert([
                'id_usuario' => 2,
                'id_privilegio' => $i,
                'status' => 'No'
            ]);
        }
        for($i=5; $i<=5; $i++){
            \DB::table('usuarios_has_privilegios')->insert([
                'id_usuario' => 2,
                'id_privilegio' => $i,
                'status' => 'Si'
            ]);
        }

        for($i=6; $i<=6; $i++){
            \DB::table('usuarios_has_privilegios')->insert([
                'id_usuario' => 2,
                'id_privilegio' => $i,
                'status' => 'No'
            ]);
        }

        for($i=7; $i<=7; $i++){
            \DB::table('usuarios_has_privilegios')->insert([
                'id_usuario' => 2,
                'id_privilegio' => $i,
                'status' => 'Si'
            ]);
        }

        for($i=8; $i<=17; $i++){
            \DB::table('usuarios_has_privilegios')->insert([
                'id_usuario' => 2,
                'id_privilegio' => $i,
                'status' => 'No'
            ]);
        }
        for($i=18; $i<=32; $i++){
            \DB::table('usuarios_has_privilegios')->insert([
                'id_usuario' => 2,
                'id_privilegio' => $i,
                'status' => 'No'
            ]);
        }

        //--- Privilegio del usuario con ID 3 - Tipo Admin de Empleado --//
        for($i=1; $i<=10; $i++){
            \DB::table('usuarios_has_privilegios')->insert([
                'id_usuario' => 3,
                'id_privilegio' => $i,
                'status' => 'No'
            ]);
        }
        for($i=11; $i<=17; $i++){
            \DB::table('usuarios_has_privilegios')->insert([
                'id_usuario' => 3,
                'id_privilegio' => $i,
                'status' => 'Si'
            ]);
        }
        for($i=18; $i<=32; $i++){
            \DB::table('usuarios_has_privilegios')->insert([
                'id_usuario' => 3,
                'id_privilegio' => $i,
                'status' => 'No'
            ]);
        }
    }
}
