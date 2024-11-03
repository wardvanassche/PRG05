<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create category</title>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body>
@include('layouts.admin-navigation')
<div class="flex items-center justify-center my-10">
    <div class="bg-white shadow-md rounded-lg p-8 w-96">
        <h1 class="text-2xl font-semibold mb-6 text-center">Create a New Category</h1>
        <form action="{{ route('categories.index') }}" method="POST">
            @csrf
            <div class="mb-4">
                <input
                    class="w-full bg-gray-200 text-gray-700 border border-gray-300 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-500"
                    id="name" name="name" type="text" placeholder="Enter category name" required>
                @error('name')
                <p class="text-xs text-red-500 font-semibold"> {{ $message }} </p>
                @enderror
            </div>
            <button type="submit"
                    class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold rounded py-3 px-4 focus:outline-none focus:shadow-outline">
                Create
            </button>
        </form>
    </div>
</div>
</body>
</html>


