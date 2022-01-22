<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AttendanceGroupFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //             ID
// name(string)
// description(longText)
// difficulty(string)
// school_id(bigInt)
            'name' => $this->faker->jobTitle(),            
            'description' => $this->faker->realText($maxNbChars = 200, $indexSize = 2),
            'difficulty' => rand(1,5),
            'school_id' => rand(1,10)
        ];
    }
}
