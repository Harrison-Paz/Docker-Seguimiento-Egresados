<?php

namespace Database\Factories;

use App\Models\Egresado;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReconocimientoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $egresado = Egresado::pluck('id')->all();
        return [
            'tipo' => $this->faker->jobTitle(),
            'area' => $this->faker->bs(),
            'institucion' => $this->faker->company(),
            'representante' => $this->faker->name(),
            'detalle' => $this->faker->realText($maxNbChars = 200, $indexSize = 2),
            'fecha' => $this->faker->dateTimeBetween('-10years', 'now'),
            'direccion' => $this->faker->streetAddress(),
            'egresado_id' => $this->faker->randomElement($egresado),
        ];
    }
}
