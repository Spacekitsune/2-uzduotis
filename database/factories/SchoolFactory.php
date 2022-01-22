<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SchoolFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->company(),            
            'description' => $this->faker->realText($maxNbChars = 200, $indexSize = 2),
            'place' => $this->faker->streetAddress(),
            'phone' => rand(111111111,999999999)

        ];
    }
}
