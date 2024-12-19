<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin dashboard</title>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body>
@if(Auth::user()->is_admin)
    @include('layouts.admin-navigation')
@else
    @include('layouts.user-navigation')
@endif

<div class="py-12">
    <!-- User Greeting Header -->
    <div class="bg-gray-900 shadow-sm sm:rounded-lg text-3xl text-white text-center py-6 w-3/4 m-auto mb-8">
        <h1 class="font-semibold">Welcome, {{ Auth::user()->name }}</h1>
    </div>

    @if(Auth::user()->is_admin)
        <!-- Dashboard Cards -->
        <div class="flex justify-center text-center">
            @include('components.dashboard-cards')
        </div>
    @else
        <div class="flex justify-center text-center">
            <div class="mx-5 w-1/6">
                <a href="{{ route('posts') }}">
                    <div class="w-full max-w-sm rounded-lg shadow bg-gray-800 hover:bg-gray-700">
                        <div class="flex flex-col items-center p-8">
                            <i class="fa-solid fa-dumbbell text-white"></i>
                            <h5 class="text-xl font-medium text-gray-900 dark:text-white mt-3">Your posts</h5>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    @endif
</div>
</body>
</html>
