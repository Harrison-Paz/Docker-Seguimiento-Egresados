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
            'name' => 'Daniel Rosas Esquerre',
            'email' => 'daniel@mail.com',
            'password' => bcrypt('123456789')
        ])->assignRole('Administrador');

        User::create([
            'name' => 'Roy Rios zabaleta',
            'email' => 'roy@mail.com',
            'password' => bcrypt('123456789')
        ])->assignRole('Egresado');

        User::create([
            'name' => 'Maria Paredes Romero',
            'email' => 'maria@mail.com',
            'password' => bcrypt('123456789')
        ])->assignRole('Secretaria');

        User::create([
            'name' => 'Desarrollador',
            'email' => 'dev@mail.com',
            'password' => bcrypt('123456789')
        ])->assignRole('developer');
    }
}
