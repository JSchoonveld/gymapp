<?php

namespace App\Http\Controllers;

use App\Http\Resources\WorkoutPlanResource;
use App\Models\WorkoutPlan;
use Illuminate\Http\Request;

class WorkoutPlanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $exercises = WorkoutPlan::query()
            ->onlyCategory(request()->get('routine_category'))
            ->orderBy('name')
            ->get();

        return WorkoutPlanResource::collection($exercises);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(WorkoutPlan $workoutPlan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, WorkoutPlan $workoutPlan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(WorkoutPlan $workoutPlan)
    {
        //
    }
}
