<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit user</title>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
@include('layouts.admin-navigation')
<div class="max-w-7xl mx-auto px-4 my-10    ">
    <h2 class="text-2xl font-bold mb-6">Edit User: {{ $user->name }}</h2>

    <div class="bg-gray-800 p-6 rounded-lg shadow-md">
        <form action="{{ route('users.update', $user->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="name" class="block text-white mb-2">Name</label>
                <input type="text" name="name" id="name" value="{{ old('name', $user->name) }}"
                       class="block w-full px-4 py-2 bg-gray-700 text-white rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500"
                       required readonly>
            </div>

            <div class="mb-4">
                <label for="email" class="block text-white mb-2">Email</label>
                <input type="email" name="email" id="email" value="{{ old('email', $user->email) }}"
                       class="block w-full px-4 py-2 bg-gray-700 text-white rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500"
                       required readonly>
            </div>

            <div class="mb-4">
                <label for="is_admin" class="inline-flex items-center text-white">
                    <input type="checkbox" name="is_admin" id="is_admin"
                           {{ $user->is_admin ? 'checked' : '' }}
                           class="text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                    <span class="ml-2">Admin</span>
                </label>
            </div>

            <div class="flex justify-between mt-6">
                <button type="submit" class="px-4 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700">
                    Update User
                </button>

                <a href="{{ route('users.index') }}"
                   class="px-4 py-2 bg-gray-600 text-white rounded-lg hover:bg-gray-700">
                    Cancel
                </a>
            </div>
        </form>
    </div>
</div>
</body>
</html>
