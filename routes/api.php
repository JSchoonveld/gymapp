<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\ExerciseController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WorkoutPlanController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

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


Route::post('/user/login', [UserController::class, 'login']);
Route::post('/user/register', [UserController::class, 'register']);

Route::middleware('auth:sanctum')->prefix('workout_plan')->group(function () {
    Route::get('/', [WorkoutPlanController::class, 'index']);
    Route::get('/{workoutPlan}', [WorkoutPlanController::class, 'show']);
    Route::post('/', [WorkoutPlanController::class, 'store']);
    Route::put('/{workoutPlan}', [WorkoutPlanController::class, 'update']);
    Route::delete('/{workoutPlan}', [WorkoutPlanController::class, 'destroy']);
});

Route::middleware('auth:sanctum')->prefix('exercise')->group(function () {
    Route::get('/', [ExerciseController::class, 'index']);
    Route::get('/{exercise}', [ExerciseController::class, 'show']);
    Route::post('/', [ExerciseController::class, 'store']);
    Route::put('/{exercise}', [ExerciseController::class, 'update']);
    Route::delete('/{exercise}', [ExerciseController::class, 'destroy']);
});

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});
