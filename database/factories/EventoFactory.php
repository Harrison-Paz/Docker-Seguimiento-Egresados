<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EventoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'titulo' => $this->faker->catchPhrase(),            
            'organizacion' => $this->faker->company(),
            'fechaInscripcion' => $this->faker->dateTimeBetween('-1years', 'now'),
            'fechaEvento' => $this->faker->dateTimeBetween('-1month', 'now'),
            'horasAcademicas' => $this->faker->numberBetween(12,24),
            'direccion' => $this->faker->streetAddress(),
            'detalle' => $this->faker->realTextBetween($minNbChars = 160, $maxNbChars = 200, $indexSize = 2),
        ];
    }
}
