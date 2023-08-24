<?php

namespace Database\Seeders;

use App\Models\Exercise;
use App\Models\WorkoutDay;
use App\Models\WorkoutDayExercise;
use Illuminate\Database\Seeder;

class WorkoutDayExerciseSeeder extends Seeder
{
    public function run(): void
    {
        WorkoutDayExercise::factory()
            ->count(30)
            ->state(function (array $attributes) {
                return [
                    'workout_day_id' => WorkoutDay::all()->random()->id,
                    'exercise_id' => Exercise::all()->random()->id,
                ];
            })
            ->create();
    }

}
