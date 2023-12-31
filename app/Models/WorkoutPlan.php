<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class WorkoutPlan extends Model
{
    use HasFactory;

    public function creator(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function workoutDays(): HasMany
    {
        return $this->hasMany(WorkoutDay::class);
    }

    public function scopeOnlyCategory(Builder $query, ?string $value): Builder
    {
        if (!$value) {
            return $query;
        }

        if ($value === 'All') {
            return $query;
        }

        return $query->where('routine_category', $value);
    }
}
