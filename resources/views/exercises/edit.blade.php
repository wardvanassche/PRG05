<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit exercise</title>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

@if(Auth::user()->is_admin)
    @include('layouts.admin-navigation')
@else
    @include('layouts.user-navigation')
@endif

<div class="max-w-7xl mx-auto px-4 my-10    ">
    <h2 class="text-2xl font-bold mb-6">Edit Exercise: {{ $exercise->name }}</h2>

    <div class="bg-gray-800 p-6 rounded-lg shadow-md">
        <form action="{{ route('exercises.update', $exercise->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="name" class="block text-white mb-2">Name</label>
                <input type="text" name="name" id="name" value="{{ old('name', $exercise->name) }}"
                       class="block w-full px-4 py-2 bg-gray-700 text-white rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500"
                       required>
            </div>

            <div class="mb-4">
                <label for="description" class="block text-white mb-2">Description</label>
                <input type="text" name="description" id="description"
                       value="{{ old('email', $exercise->description) }}"
                       class="block w-full px-4 py-2 bg-gray-700 text-white rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500"
                       required>
            </div>

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
                <p class="text-xs text-red-500 font-semibold italic"> {{ $message }} </p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="image" class="block text-gray-700 font-medium mb-2">Image</label>
                <input
                    class="w-full bg-gray-200 text-gray-700 border border-gray-300 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-500"
                    id="image" name="image" type="url" placeholder="Add image url" value=" {{ $exercise->image }}"
                    required>
                @error('image')
                <p class="text-xs text-red-500 font-semibold italic"> {{ $message }} </p>
                @enderror
            </div>

            <div class="flex justify-between mt-6">
                <button type="submit" class="px-4 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700">
                    Update Exercise
                </button>

                <a href="{{ route('posts') }}"
                   class="px-4 py-2 bg-gray-600 text-white rounded-lg hover:bg-gray-700">
                    Cancel
                </a>
            </div>
        </form>
    </div>
</div>
</body>
</html>
