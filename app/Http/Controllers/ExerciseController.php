<?php

namespace App\Http\Controllers;

class ExerciseController extends Controller
{
    public function index()
    {
        $exercises = [
            [
                "name" => "chest press",
                "category" => "chest",
            ],
            [
                "name" => "lat pull down",
                "category" => "back",
            ]
        ];


        return view('exercises', compact('exercises'));
    }
}
