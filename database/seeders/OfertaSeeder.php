<?php

namespace Database\Seeders;

use App\Models\Oferta;
use Illuminate\Database\Seeder;

class OfertaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Oferta::factory(30)->create();
    }
}
