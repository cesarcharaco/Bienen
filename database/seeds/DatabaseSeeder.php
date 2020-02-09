<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(AreasTableSeeder::class);
        $this->call(DepartamentosTableSeeder::class);
        $this->call(ExamenesTableSeeder::class);
        $this->call(CursosTableSeeder::class);
        $this->call(EmpleadosTableSeeder::class);
        $this->call(PlanificacionTableSeeder::class);
        // $this->call(ActividadesTableSeeder::class);
        $this->call(PrivilegiosTableSeeder::class);
        $this->call(UsuariosPrivilegiosTableSeeder::class);

        // $this->call(NovedadesTableSeeder::class);
    }
}
