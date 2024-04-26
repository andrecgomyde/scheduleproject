<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function index()
    {
        $activities = Activity::all();
        return response()->json($activities);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'start_date' => 'required|date',
            'due_date' => 'required|date',
            'status' => 'required',
            'user_id' => 'required|exists:users,id', 
        ]);

        $activity = Activity::create($request->all());
        return response()->json($activity, 201);
    }

    public function show($id)
    {
        $activity = Activity::find($id);
        if (!$activity) {
            return response()->json(['error' => 'Activity not found'], 404);
        }
        return response()->json($activity);
    }

    public function update(Request $request, $id)
    {
        $activity = Activity::find($id);
        if (!$activity) {
            return response()->json(['error' => 'Activity not found'], 404);
        }

        $request->validate([
            'title' => 'required',
            'start_date' => 'required|date',
            'due_date' => 'required|date',
            'status' => 'required',
            'user_id' => 'required|exists:users,id', 
        ]);

        $activity->update($request->all());
        return response()->json($activity, 200);
    }

    public function destroy($id)
    {
        $activity = Activity::find($id);
        if (!$activity) {
            return response()->json(['error' => 'Activity not found'], 404);
        }

        $activity->delete();
        return response()->json(null, 204);
    }
}
