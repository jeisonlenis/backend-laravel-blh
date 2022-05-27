<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->firstname(),
            'apellido' => $this->faker->lastName(),
            'numero_id' => $this->faker->randomNumber()
        ];
    }
}
