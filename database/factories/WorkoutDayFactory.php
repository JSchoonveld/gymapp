<?php

namespace Database\Factories;

use App\Models\WorkoutPlan;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\WorkoutDay>
 */
class WorkoutDayFactory extends Factory
{
    public function definition(): array
    {
        return [
            'workout_plan_id' => WorkoutPlan::factory(),
            'day_number' => $this->faker->numberBetween(1, 7),
            'name' => $this->faker->word,
            'date' => $this->faker->dateTimeBetween('-1 week', '+1 week'),
        ];
    }
}
