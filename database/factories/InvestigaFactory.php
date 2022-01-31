<?php

namespace Database\Factories;
use App\Models\Egresado;

use Illuminate\Database\Eloquent\Factories\Factory;

class InvestigaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $egresados = Egresado::pluck('id')->all();
        return [
            'tema' => $this->faker->catchPhrase(),
            'area' => $this->faker->company(),
            'fecha' => $this->faker->dateTimeBetween('-10years', 'now'),
            'egresado_id' => $this->faker->randomElement($egresados),
        ];
    }
}
