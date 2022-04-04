<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class UserLessonsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->numberBetween(1, 200),
            'lesson_id' => $this->faker->numberBetween(1, 200),
        ];
    }
}