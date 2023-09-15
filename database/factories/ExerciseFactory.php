<?php

namespace Database\Factories;

use App\Models\ExerciseCategory;
use App\Models\Muscle;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Exercise>
 */
class ExerciseFactory extends Factory
{
    public function definition(): array
    {
        $muscleNames = Muscle::pluck('name')->all();
        $categories = ExerciseCategory::pluck('name')->all();

        return [
            'name' => $this->faker->words(rand(1, 3), true),
            'category' => $this->faker->randomElement($categories),
        ];
    }
}
