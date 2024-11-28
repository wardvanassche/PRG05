<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posts</title>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

@if(Auth::user()->is_admin)
    @include('layouts.admin-navigation')
@else
    @include('layouts.user-navigation')
@endif

<div class="py-12 flex flex-col m-auto">

    <!-- User Greeting Header -->
    <div class="bg-gray-900 shadow-sm sm:rounded-lg text-3xl text-white text-center py-6 w-3/4 m-auto mb-8">
        @if(Auth::user()->is_admin)
            <h1 class="font-semibold">Posts</h1>
        @else
            <h1 class="font-semibold">Your posts</h1>
        @endif
    </div>

    <div class="w-85 m-auto my-10 p-6 rounded-lg shadow-lg">
        <table class="w-full text-sm text-left bg-gray-800 rounded-lg overflow-hidden">
            <thead class="text-xs uppercase bg-gray-600">
            <tr>
                <th scope="col" class="px-6 py-3 text-gray-200">ID</th>
                <th scope="col" class="px-6 py-3 text-gray-200">User</th>
                <th scope="col" class="px-6 py-3 text-gray-200">Name</th>
                <th scope="col" class="px-6 py-3 text-gray-200">Category</th>
                <th scope="col" class="px-6 py-3 text-gray-200">Description</th>
                <th scope="col" class="px-6 py-3 text-gray-200">Image</th>
                <th scope="col" class="px-6 py-3 text-gray-200">Created at</th>
                <th scope="col" class="px-6 py-3 text-gray-200">Updated at</th>
                <th scope="col" class="px-6 py-3 text-gray-200"></th>
                <th scope="col" class="px-6 py-3 text-gray-200"></th>
            </tr>
            </thead>
            <tbody>
            @include('components.posts')
            </tbody>
        </table>
    </div>
</div>
</body>
</html>
