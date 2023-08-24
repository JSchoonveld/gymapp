<?php

namespace Database\Seeders;

use App\Models\WorkoutDay;
use App\Models\WorkoutPlan;
use Illuminate\Database\Seeder;

class WorkoutDaySeeder extends Seeder
{
    public function run(): void
    {
        WorkoutDay::factory()
            ->count(15)
            ->state(function (array $attributes) {
                return [
                    'workout_plan_id' => WorkoutPlan::all()->random()->id,
                ];
            })
            ->create();
    }

}
