<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DomicilioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'domicilio' => $this->faker->address(),
            'numero_exterior' => $this->faker->streetAddress(),
            'colonia' => $this->faker->city(),
            'cp' => $this->faker->postcode(),
            'ciudad' => $this->faker->city()
        ];
    }
}
