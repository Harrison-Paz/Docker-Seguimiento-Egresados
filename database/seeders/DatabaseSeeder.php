<?php

namespace Database\Seeders;

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
        $this->call(RoleSeeder::class);         
        $this->call(UserSeeder::class);
        $this->call(EgresadoSeeder::class);
        $this->call(InvestigaSeeder::class);
        $this->call(ReconocimientoSeeder::class);
        $this->call(EmpresaSeeder::class);
        $this->call(OfertaSeeder::class);
        $this->call(EventoSeeder::class);
    }
}
