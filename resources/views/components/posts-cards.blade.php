<div class="container mx-auto my-10 p-4">
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-4">
        @foreach($exercises as $exercise)
            <div class="w-full rounded-lg overflow-hidden shadow-lg bg-white">
                <!-- Exercise Image -->
                <img class="w-full h-48 object-cover"
                     src="{{ $exercise->image }}"
                     alt="Picture of {{ $exercise->name }}">

                <!-- Exercise Info -->
                <div class="p-4">
                    <!-- Exercise Name -->
                    <h1 class="font-bold text-xl text-gray-800 mb-2">{{ $exercise->name }}</h1>

                    <!-- Category Tag -->
                    <span
                        class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mb-2">
                        {{ $exercise->category->name }}
                    </span>

                    <!-- Buttons -->
                    <div class="mt-4 flex space-x-2">
                        <!-- Details Button -->
                        <a href="{{ route('posts.show', $exercise->id) }}"
                           class="inline-block bg-blue-500 hover:bg-blue-600 text-white font-semibold px-3 py-2 rounded-md">
                            Details
                        </a>

                        <!-- Update Button -->
                        <a href="{{ route('posts.edit', $exercise->id) }}"
                           class="inline-block bg-yellow-500 hover:bg-yellow-600 text-white font-semibold px-3 py-2 rounded-md">
                            Update
                        </a>

                        <!-- Delete Button -->
                        <form action="{{ route('exercises.destroy', $exercise->id) }}" method="POST"
                              onsubmit="return confirm('Are you sure you want to delete this exercise?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                    class="inline-block bg-red-500 hover:bg-red-600 text-white font-semibold px-3 py-2 rounded-md">
                                Delete
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
