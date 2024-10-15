<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercises</title>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body>
@include('layouts.header')
<main>
    <ul>
        @foreach($exercises as $exercise)
            <li>{{ $exercise['name'] }}</li>
            <li>{{ $exercise['category'] }}</li>
        @endforeach
    </ul>
</main>

<footer>

</footer>
</body>
</html>
