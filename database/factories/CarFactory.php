<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'modelo' => $this->faker->country(),
            'anio' => $this->faker->year(),
            'valor' => $this->faker->randomNumber(),
        ];
    }
}
