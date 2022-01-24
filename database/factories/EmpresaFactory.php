<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EmpresaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'razonSocial' => $this->faker->company(),
            'RUC' => $this->faker->numberBetween(20000000000, 30000000000),
            'direccion' => $this->faker->streetAddress(),
            'ubicacion' => $this->faker->city(),
            'telefono' => $this->faker->phoneNumber(),
            'fecha'=> $this->faker->dateTimeBetween('-10years', 'now'),
            'isActivo' => $this->faker->numberBetween(0,1),
        ];
    }
}
