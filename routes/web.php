<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

Route::resource('exercises', \App\Http\Controllers\ExerciseController::class);

Route::resource('users', \App\Http\Controllers\UserController::class)->middleware(['auth', 'admin']);

Route::resource('categories', \App\Http\Controllers\CategoryController::class)->middleware(['auth', 'admin']);

Route::get('/posts', function () {
    return view('posts');
})->middleware('auth')->name('posts');
