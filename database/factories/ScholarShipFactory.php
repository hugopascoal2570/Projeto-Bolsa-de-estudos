<?php

namespace Database\Factories;

use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use phpDocumentor\Reflection\Types\Integer;

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
            'course_id' => Course::factory(),
            'active' => $this->faker->randomDigit,
            'bolsas' => $this->faker->numerify('##'),
            'inicio' => $this->faker->dateTime('NOW'),
            'final' => $this->faker->dateTimeInInterval('-1 day', '+7 days')
        ];
    }
}
