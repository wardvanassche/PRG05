<?php

namespace App\Http\Controllers;

use App\Models\Exercise;
use App\Models\Category;
use Carbon\Carbon;
use http\Client\Curl\User;
use Illuminate\Http\Request;

class ExerciseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $categories = Category::all();

        $query = Exercise::query();

        // filter by title if provided
        if (isset($request->title) && ($request->title != null)) {
            $query->where('name', 'like', '%' . $request->title . '%');
        }

        // Filter by category if selected
        if (isset($request->category_id) && $request->category_id != null) {
            $query->where('category_id', $request->category_id);
        }

        // Paginate the results (15 exercises per page)
        $exercises = $query->paginate(15);

        return view('exercises.index', compact('exercises', 'categories'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (\Auth::guest()) {
            return redirect('login');
        }

        $user = \Auth::user();
        $registrationTime = $user->created_at;
        $currentTime = Carbon::now();
        $timeDifference = $currentTime->diffInMinutes($registrationTime);

        if ($timeDifference > -5) {
            abort(403, 'You need to be registered for at least 5 minutes to create exercises');
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
            'description' => ['required', 'min:50', 'max:300'],
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
        if ($exercise->user_id == \Auth::id() || \Auth::user()->is_admin) {
            return view('exercises.edit', ['exercise' => $exercise, 'categories' => Category::all()]);
        } else {
            abort(403, 'Unauthorized action.');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id', // Validate that the category exists in the categories table
            'image' => 'nullable|url', // Assuming the image is a URL, validate it if provided
        ]);

        $exercise = Exercise::findOrFail($id);

        $exercise->update([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'category_id' => $request->input('category_id'),  // Update the category_id field
            'image' => $request->input('image', $exercise->image), // Keep the existing image if no new one is provided
        ]);

        return redirect()->route('posts');
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
