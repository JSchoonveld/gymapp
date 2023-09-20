<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\WorkoutPlan>
 */
class WorkoutPlanFactory extends Factory
{
    public function definition(): array
    {
        $planPictures = ['workout-plan-1.jpg', 'workout-plan-2.jpg', 'workout-plan-3.jpg', 'workout-plan-4.jpg', 'workout-plan-5.jpg'];
        $routineCategories = ['Full body', 'Push pull legs', 'Upper lower', 'Bro split', 'Other'];

        return [
            'user_id' => User::factory(),
            'name' => $this->faker->text(30),
            'description' => $this->faker->text(255),
            'routine_category' => $routineCategories[array_rand($routineCategories)],
            'image' => $planPictures[array_rand($planPictures)],
        ];
    }
}
