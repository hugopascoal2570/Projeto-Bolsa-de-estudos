<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'bolsas' => $this->numberBetween($min = 0, $max = 100),
            'inicio' => $this->faker->dateTime(),
            'final' => $this->faker->dateTime(),
        ];
    }
}
