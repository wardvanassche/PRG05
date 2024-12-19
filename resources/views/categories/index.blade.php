<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Categories</title>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
@include('layouts.admin-navigation')
<div class="py-12 flex flex-col m-auto">

    <!-- User Greeting Header -->
    <div class="bg-gray-900 shadow-sm sm:rounded-lg text-3xl text-white text-center py-6 w-3/4 m-auto mb-8">
        <h1 class="font-semibold">Categories</h1>
    </div>

    <div class="mx-auto my-10 p-6 rounded-lg shadow-lg w-1/3">
        <!-- Create Category Button -->
        <div class="mb-4 text-center">
            <a href="{{ route('categories.create') }}"
               class="inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold rounded py-2 px-4">
                Create Category
            </a>
        </div>

        <!-- Categories Table -->
        <table class="text-sm text-left bg-gray-800 w-full rounded-lg overflow-hidden">
            <thead class="text-xs uppercase bg-gray-600 rounded-tl-lg rounded-tr-lg">
            <tr>
                <th scope="col" class="px-6 py-3 text-gray-200">ID</th>
                <th scope="col" class="px-6 py-3 text-gray-200">Name</th>
                <th scope="col" class="px-6 py-3 text-gray-200"></th>
            </tr>
            </thead>
            <tbody class="rounded-bl-lg rounded-br-lg">
            @include('components.categories')
            </tbody>
        </table>
    </div>
</div>
</body>
</html>
