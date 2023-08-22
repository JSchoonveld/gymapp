<?php

namespace Database\Factories;

use App\Models\Muscle;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Exercise>
 */
class ExerciseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $muscleNames = Muscle::pluck('name')->all();

        return [
            'name' => $this->faker->words(rand(1, 3), true),
            'categories' => json_encode($this->faker->randomElements($muscleNames, rand(1, 2))),
        ];
    }
}
