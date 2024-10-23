<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Categories</title>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
@include('layouts.navigation')
<div class="w-3/4 m-auto my-10">
    <table class="w-full text-sm text-left">
        <thead class="text-xs uppercase bg-gray-600">
        <tr>
            <th scope="col" class="px-6 py-3">
                id
            </th>
            <th scope="col" class="px-6 py-3">
                name
            </th>
            <th scope="col" class="px-6 py-3">
                Action
            </th>
        </tr>
        </thead>
        <tbody>
        @include('components.categories')
        </tbody>
    </table>
</div>
</body>
</html>
