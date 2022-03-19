<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ScholarShip>
 */
class ScholarShipFactory extends Factory
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
            'course_id' => $this->numberBetween($min = 0, $max = 30),
            'bolsas' => $this->numberBetween($min = 0, $max = 300),
            'inicio' => $this->faker->dateTime(),
            'final' => $this->faker->dateTime(),
        ];
    }
}
