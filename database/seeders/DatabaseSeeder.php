<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
//            UserSeeder::class,
            MuscleSeeder::class,
            ExerciseCategorySeeder::class,
            ExerciseSeeder::class,
            WorkoutPlanSeeder::class,
            WorkoutDaySeeder::class,
            WorkoutDayExerciseSeeder::class,
        ]);
    }
}
