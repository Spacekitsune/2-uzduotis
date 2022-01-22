<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // name(string)
            // surname(string)
            // group_id(bigInt)
            // image_url(string)
            'name' => $this->faker->firstName(),           
            'surname' => $this->faker->lastName(),
            'group_id' => rand(1,10),
            'image_url' => $this->faker->imageUrl()
        ];
    }
}
