<?php

use App\Http\Controllers\API\V1\ExerciseController;
use App\Http\Controllers\API\V1\WorkoutPlanController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::middleware('auth:sanctum')->prefix('workout-plans')->group(function () {
    Route::get('/', [WorkoutPlanController::class, 'index']);
    Route::get('/{workoutPlan}', [WorkoutPlanController::class, 'show']);
    Route::post('/', [WorkoutPlanController::class, 'store']);
    Route::put('/{workoutPlan}', [WorkoutPlanController::class, 'update']);
    Route::delete('/{workoutPlan}', [WorkoutPlanController::class, 'destroy']);
});

Route::middleware('auth:sanctum')->prefix('exercises')->group(function () {
    Route::get('/', [ExerciseController::class, 'index']);
    Route::get('/{exercise}', [ExerciseController::class, 'show']);
    Route::post('/', [ExerciseController::class, 'store']);
    Route::put('/{exercise}', [ExerciseController::class, 'update']);
    Route::delete('/{exercise}', [ExerciseController::class, 'destroy']);
});
