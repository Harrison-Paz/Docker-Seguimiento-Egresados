<?php

namespace Database\Seeders;

use App\Models\Investiga;
use Illuminate\Database\Seeder;

class InvestigaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Investiga::factory(30)->create();
    }
}
