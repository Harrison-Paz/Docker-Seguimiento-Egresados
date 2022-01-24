<?php

namespace Database\Factories;

use App\Models\Empresa;
use Illuminate\Database\Eloquent\Factories\Factory;

class OfertaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $empresas = Empresa::pluck('id');
        return [
            'oferta' => $this->faker->catchPhrase(),
            'tipo' => $this->faker->jobTitle(),
            'ubicacion' => $this->faker->address(),
            'fechaEmicion' => $this->faker->dateTimeBetween('-10years', 'now'),
            'vacantes' => $this->faker->numberBetween(5,20),
            'detalle' => $this->faker->realTextBetween($minNbChars = 160, $maxNbChars = 200, $indexSize = 2),
            'empresa_id' => $this->faker->randomElement($empresas),
        ];
    }
}
