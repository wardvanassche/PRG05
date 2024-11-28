<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/dashboard', [\App\Http\Controllers\DashboardController::class, 'index'])->middleware('auth')->name('dashboard');

Route::get('/posts', [\App\Http\Controllers\PostController::class, 'index'])->middleware('auth')->name('posts');

Route::resource('exercises', \App\Http\Controllers\ExerciseController::class);

Route::resource('users', \App\Http\Controllers\UserController::class)->middleware(['auth', 'admin']);

Route::resource('categories', \App\Http\Controllers\CategoryController::class)->middleware(['auth', 'admin']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
