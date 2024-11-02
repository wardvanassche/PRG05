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

                    <!-- Details Button -->
                    <div class="mt-4">
                        <a href="{{ route('exercises.show', $exercise->id) }}"
                           class="inline-block bg-blue-500 hover:bg-blue-600 text-white font-semibold px-3 py-2 rounded-md">
                            Details
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
