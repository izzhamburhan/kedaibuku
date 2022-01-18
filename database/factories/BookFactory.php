<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(),
            'author' => $this->faker->name(),
            'isbn' => $this->faker->randomNumber(8, true),
            'price' => $this->faker->randomFloat(2, 5, 30), 
        ];
    }
}
