<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('workout_day_exercises', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('workout_day_id');
            $table->foreign('workout_day_id')->references('id')->on('workout_days')->onDelete('cascade');
            $table->unsignedBigInteger('exercise_id');
            $table->foreign('exercise_id')->references('id')->on('exercises')->onDelete('cascade');
            $table->integer('sets');
            $table->integer('reps');
            $table->integer('weight');
            $table->integer('rest');
            $table->integer('order');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('workout_day_exercises');
    }
};
