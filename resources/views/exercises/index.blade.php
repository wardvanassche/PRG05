<x-app-layout title="Exercises">
    <div class="my-10 max-w-7xl mx-auto px-4"> <!-- Adjusted the container width -->

        <h2 class="text-2xl font-bold mb-6 text-center">Filter Exercises</h2>


        <div class="flex flex-wrap my-10">
            @include('components.exercises-cards')
        </div>
    </div>
</x-app-layout>
