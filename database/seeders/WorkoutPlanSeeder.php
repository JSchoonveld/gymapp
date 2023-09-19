<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\WorkoutPlan;
use Illuminate\Database\Seeder;

class WorkoutPlanSeeder extends Seeder
{
    public function run(): void
    {
        WorkoutPlan::factory()
            ->count(10)
            ->state(function (array $attributes) {
                return [
                    'user_id' => 1,
                ];
            })
            ->create();
    }
}
