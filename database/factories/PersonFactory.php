<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PersonFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'mail' => $this->faker->safeEmail(),
            'age' => $this->faker->randomNumber(2)
        ];
    }
}
