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
        if (\Auth::guest()) {
            return redirect('login');
        }

        $exercises = Exercise::all();
        $categories = Category::all();
        return view('exercises.create', compact('exercises', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'description' => ['required', 'min:10'],
            'category_id' => ['required'],
            'image' => ['required'],
        ]);

        $exercise = new Exercise();
        $exercise->user_id = \Auth::user()->id;
        $exercise->name = $request->input('name');
        $exercise->description = $request->input('description');
        $exercise->category_id = $request->input('category_id');
        $exercise->image = $request->input('image');
        $exercise->save();

        return redirect()->route('exercises.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Exercise $exercise)
    {
        return view('exercises.show', ['exercise' => $exercise]);
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
        $exercise->delete();
        return redirect('/posts');
    }
}
