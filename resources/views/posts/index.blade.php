<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercises</title>
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
        <h1 class="font-semibold">
            @if(Auth::user()->is_admin)
                Posts
            @else
                Your posts
            @endif
        </h1>
    </div>
</div>

<!-- Posts -->
@foreach($exercises as $exercise)
    @include('components.posts-cards')
@endforeach
</body>
</html>
