<x-app-layout title="Exercises">
    <div class="my-10 max-w-7xl mx-auto px-4"> <!-- Adjusted the container width -->

        <!-- Filter Section -->
        <form action="{{ route('exercises.index') }}" method="GET">
            <div class="flex justify-center mb-6 space-x-4"> <!-- Added space between the dropdown and search bar -->
                <!-- Dropdown Filter (Centered and Wider) -->
                <div class="relative w-full max-w-md"> <!-- Set max-width to control the width -->
                    <select id="category" name="category"
                            class="mt-1 block w-full px-6 py-3 text-lg border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        <option value="">All Categories</option>
                        @foreach($categories as $category)
                            <option
                                value="{{ $category->id }}" {{ request('category') == $category->id ? 'selected' : '' }}>
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <!-- Search Bar (Right next to the Dropdown) -->
                <div class="relative w-full max-w-md">
                    <input type="text" id="title" name="title"
                           class="mt-1 block w-full px-6 py-3 text-lg border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                           placeholder="Search exercises" value="{{ request('search') }}">
                </div>

                <!-- Submit Button -->
                <div class="flex items-center">
                    <button type="submit"
                            class="inline-flex items-center justify-center px-6 py-3 text-lg font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:text-sm">
                        Search
                    </button>
                </div>
            </div>
        </form>

        <!-- Exercises List -->
        <div class="flex flex-wrap my-10">
            @include('components.exercises-cards', ['category' => request('category'), 'search' => request('search')])
        </div>
    </div>
</x-app-layout>
