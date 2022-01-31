<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EgresadoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {        
        return [
            'direccion' => $this->faker->streetAddress(),
            'celular' => $this->faker->numberBetween(900000000, 999999999),
            'DNI' => $this->faker->numberBetween(10000000, 99999999),
            'fechaEgreso' =>$this->faker->dateTimeBetween('-10years', 'now'),
            'numPromocion' =>$this->faker->numberBetween(1,22),
            'puesto' =>$this->faker->numberBetween(1,60),
            'hasBachiller' =>$this->faker->numberBetween(0,1),
            'hasTitulo' =>$this->faker->numberBetween(0,1),
            'hasMaestria' =>$this->faker->numberBetween(0,1),
            'hasDoctorado' =>$this->faker->numberBetween(0,1),
            'user_id' =>$this->faker->unique()->numberBetween(5,54),
        ];
    }
}
