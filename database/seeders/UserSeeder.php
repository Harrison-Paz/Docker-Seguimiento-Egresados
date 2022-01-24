<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'nombre' => 'Daniel',
            'apellido' => 'Rosas Esquerre',
            'email' => 'daniel@mail.com',
            'password' => bcrypt('123456789')
        ])->assignRole('Administrador');

        User::create([
            'nombre' => 'Roy',
            'apellido' => 'Rios zabaleta',
            'email' => 'roy@mail.com',
            'password' => bcrypt('123456789')
        ])->assignRole('Egresado');

        User::create([
            'nombre' => 'Maria',
            'apellido' => 'Paredes Romero',
            'email' => 'maria@mail.com',
            'password' => bcrypt('123456789')
        ])->assignRole('Secretaria');

        User::create([
            'nombre' => 'Desarrollador',
            'apellido' => 'dev.',
            'email' => 'dev@mail.com',
            'password' => bcrypt('123456789')
        ])->assignRole('developer');

        for ($i=0; $i <20 ; $i++) { 
            User::factory()->create(['password'=> bcrypt('123456789')])->assignRole('Egresado');
        }
    }
}
