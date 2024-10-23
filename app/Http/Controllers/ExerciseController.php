<?php

namespace App\Http\Controllers;

use App\Models\Exercise;
use App\Models\Category;
use Illuminate\Http\Request;

class ExerciseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('exercises.index', ['exercises' => Exercise::all()], ['categories' => Category::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('exercises.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(['name' => 'required']);
        $exercise = new Exercise();
        $exercise->name = $request->input('name');
        $exercise->description = $request->input('description');
        $exercise->category_id = 1;
        $exercise->user_id = 1;
        $exercise->save();

        return redirect()->route('exercises.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(Exercise $exercise)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Exercise $exercise)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Exercise $exercise)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Exercise $exercise)
    {
        //
    }
}
