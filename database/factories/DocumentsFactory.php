<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DocumentsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'title' => $this->faker->name(),
            'lesson_id' => $this->faker->numberBetween(1, 200),
            'file_path' => $this->faker->imageUrl(),
        ];
    }
}
