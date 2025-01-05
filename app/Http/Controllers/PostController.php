<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Exercise;

class PostController extends Controller
{
    public function index()
    {
        if (\Auth::user()->is_admin) {
            return view('posts', ['exercises' => Exercise::all()]);
        } else {
            return view('posts', ['exercises' => Exercise::where('user_id', \Auth::user()->id)->get()]);
        }
    }
}
