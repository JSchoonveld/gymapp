<?php

namespace Database\Seeders;

use App\Models\ExerciseCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExerciseCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ExerciseCategory::factory()
            ->create([
                'name' => 'biceps',
            ]);

        ExerciseCategory::factory()
            ->create([
                'name' => 'triceps',
            ]);

        ExerciseCategory::factory()
            ->create([
                'name' => 'chest',
            ]);

        ExerciseCategory::factory()
            ->create([
                'name' => 'upper back',
            ]);

        ExerciseCategory::factory()
            ->create([
                'name' => 'lower back',
            ]);

        ExerciseCategory::factory()
            ->create([
                'name' => 'neck',
            ]);

        ExerciseCategory::factory()
            ->create([
                'name' => 'quadriceps',
            ]);

        ExerciseCategory::factory()
            ->create([
                'name' => 'hamstrings',
            ]);

        ExerciseCategory::factory()
            ->create([
                'name' => 'calves',
            ]);

        ExerciseCategory::factory()
            ->create([
                'name' => 'abs',
            ]);

        ExerciseCategory::factory()
            ->create([
                'name' => 'glutes',
            ]);

        ExerciseCategory::factory()
            ->create([
                'name' => 'forearms',
            ]);

        ExerciseCategory::factory()
            ->create([
                'name' => 'shoulders',
            ]);

        ExerciseCategory::factory()
            ->create([
                'name' => 'forearms',
            ]);

        ExerciseCategory::factory()
            ->create([
                'name' => 'cardio',
            ]);

        ExerciseCategory::factory()
            ->create([
                'name' => 'other',
            ]);
    }
}
