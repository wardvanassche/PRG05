<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Exercise</title>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

@if(Auth::user()->is_admin)
    @include('layouts.admin-navigation')
@else
    @include('layouts.user-navigation')
@endif

<div class="max-w-md mx-auto my-10 p-5 bg-white rounded shadow-lg">
    <h1 class="text-2xl font-semibold mb-6 text-center">Edit Exercise: {{ $exercise->name }}</h1>
    <form action="{{ route('exercises.update', $exercise->id) }}" method="POST">
        @csrf
        @method('PUT')

        <!-- Exercise Name -->
        <div class="mb-4">
            <label for="name" class="block text-gray-700 font-medium mb-2">Exercise Name</label>
            <input
                class="w-full bg-gray-200 text-gray-700 border border-gray-300 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-500"
                id="name" name="name" type="text" value="{{ old('name', $exercise->name) }}"
                placeholder="e.g., Bench Press" required>
            @error('name')
            <p class="text-xs text-red-500 font-semibold italic">{{ $message }}</p>
            @enderror
        </div>

        <!-- Description -->
        <div class="mb-4">
            <label for="description" class="block text-gray-700 font-medium mb-2">Description</label>
            <textarea
                class="w-full bg-gray-200 text-gray-700 border border-gray-300 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-500"
                id="description" name="description" rows="4" placeholder="Enter a brief description"
                required>{{ old('description', $exercise->description) }}</textarea>
            @error('description')
            <p class="text-xs text-red-500 font-semibold italic">{{ $message }}</p>
            @enderror
        </div>

        <!-- Category -->
        <div class="mb-4">
            <label for="category_id" class="block text-gray-700 font-medium mb-2">Select a Category</label>
            <select
                class="w-full bg-gray-200 text-gray-700 border border-gray-300 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-500"
                id="category_id" name="category_id" required>
                <option value="">Select a Category</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}"
                            @if($category->id == $exercise->category_id) selected @endif>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
            @error('category_id')
            <p class="text-xs text-red-500 font-semibold italic">{{ $message }}</p>
            @enderror
        </div>

        <!-- Image -->
        <div class="mb-4">
            <label for="image" class="block text-gray-700 font-medium mb-2">Image URL</label>
            <input
                class="w-full bg-gray-200 text-gray-700 border border-gray-300 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-500"
                id="image" name="image" type="url" value="{{ old('image', $exercise->image) }}"
                placeholder="Add image URL" required>
            @error('image')
            <p class="text-xs text-red-500 font-semibold italic">{{ $message }}</p>
            @enderror
        </div>

        <!-- Update Button -->
        <button type="submit"
                class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-3 rounded focus:outline-none focus:shadow-outline">
            Update Exercise
        </button>
    </form>

    <!-- Cancel Button -->
    <div class="mt-4">
        <a href="{{ route('posts') }}"
           class="w-full block text-center bg-gray-500 text-white font-bold rounded py-3 px-4 hover:bg-gray-700">
            Cancel
        </a>
    </div>
</div>
</body>
</html>
