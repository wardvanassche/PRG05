<x-app-layout title="{{$exercise->name}}">

    <!-- Back Button -->
    <div class="max-w-3xl mx-auto mt-6">
        <a href="{{route('exercises.index')}}"
           class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-blue-500 rounded-md shadow-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
            ← Back
        </a>
    </div>

    <!-- Container -->
    <div class="max-w-3xl mx-auto p-6 bg-white rounded-lg shadow-lg mt-10">

        <!-- Exercise Image -->
        <img class="w-full h-48 object-cover" src=" {{ $exercise->image }}"
             alt="Picture of {{ $exercise->name }}">

        <!-- Exercise Title -->
        <h1 class="text-3xl font-bold text-gray-800 mb-2">{{$exercise->name}}</h1>

        <!-- Exercise Description -->
        <p class="text-gray-600 mb-4">
            {{$exercise->description}}
        </p>

        <!-- Exercise Category -->
        <span
            class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">{{ $exercise->category->name }}</span>
    </div>
</x-app-layout>
