<?php

namespace Database\Factories;

use App\Models\Exercise;
use App\Models\WorkoutDay;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\WorkoutDayExercise>
 */
class WorkoutDayExerciseFactory extends Factory
{
    public function definition(): array
    {
        return [
            'workout_day_id' => WorkoutDay::factory(),
            'exercise_id' => Exercise::factory(),
            'sets' => $this->faker->numberBetween(1, 5),
            'reps' => $this->faker->numberBetween(1, 12),
            'weight' => $this->faker->numberBetween(1, 100),
            'rest' => $this->faker->numberBetween(30, 120),
            'order' => $this->faker->numberBetween(1, 10),
        ];
    }
}
