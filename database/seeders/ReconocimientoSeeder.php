<?php

namespace Database\Seeders;

use App\Models\Reconocimiento;
use Illuminate\Database\Seeder;

class ReconocimientoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Reconocimiento::factory(50)->create();
    }
}
