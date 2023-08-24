<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class WorkoutDayExercise extends Model
{
    use HasFactory;

    public function workoutDay(): BelongsTo
    {
        return $this->belongsTo(WorkoutDay::class);
    }

    public function exercise(): belongsTo
    {
        return $this->belongsTo(Exercise::class);
    }
}
