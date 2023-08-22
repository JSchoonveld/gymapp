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
                'name' => 'Biceps',
            ]);

        Muscle::factory()
            ->create([
                'name' => 'Triceps',
            ]);

        Muscle::factory()
            ->create([
                'name' => 'Chest',
            ]);

        Muscle::factory()
            ->create([
                'name' => 'Upper back',
            ]);

        Muscle::factory()
            ->create([
                'name' => 'Lower back',
            ]);

        Muscle::factory()
            ->create([
                'name' => 'Neck',
            ]);

        Muscle::factory()
            ->create([
                'name' => 'Quadriceps',
            ]);

        Muscle::factory()
            ->create([
                'name' => 'Hamstrings',
            ]);

        Muscle::factory()
            ->create([
                'name' => 'Calves',
            ]);

    }
}
