<?php

use Illuminate\Database\Seeder;

class ExamenesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('examenes')->insert([
            'examen'=> 'Hematología Completa'
        ]);
        \DB::table('examenes')->insert([
            'examen'=> 'HIV'
        ]);
        \DB::table('examenes')->insert([
            'examen'=> 'VDRL'
        ]);
        \DB::table('examenes')->insert([
            'examen'=> 'Plaquetas'
        ]);
        \DB::table('examenes')->insert([
            'examen'=> 'Perfil 20'
        ]);
    }
}
