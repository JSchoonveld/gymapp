<?php

namespace Database\Seeders;

use App\Models\Muscle;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MuscleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Muscle::factory()
            ->create([
                'name' => 'biceps',
            ]);

        Muscle::factory()
            ->create([
                'name' => 'triceps',
            ]);

        Muscle::factory()
            ->create([
                'name' => 'chest',
            ]);

        Muscle::factory()
            ->create([
                'name' => 'upper back',
            ]);

        Muscle::factory()
            ->create([
                'name' => 'lower back',
            ]);

        Muscle::factory()
            ->create([
                'name' => 'neck',
            ]);

        Muscle::factory()
            ->create([
                'name' => 'quadriceps',
            ]);

        Muscle::factory()
            ->create([
                'name' => 'hamstrings',
            ]);

        Muscle::factory()
            ->create([
                'name' => 'calves',
            ]);

        Muscle::factory()
            ->create([
                'name' => 'abs',
            ]);

        Muscle::factory()
            ->create([
                'name' => 'glutes',
            ]);

        Muscle::factory()
            ->create([
                'name' => 'forearms',
            ]);

        Muscle::factory()
            ->create([
                'name' => 'shoulders',
            ]);

        Muscle::factory()
            ->create([
                'name' => 'forearms',
            ]);
    }
}
