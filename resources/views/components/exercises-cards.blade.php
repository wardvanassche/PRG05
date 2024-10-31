@foreach($exercises as $exercise)
    <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/5 rounded-lg overflow-hidden shadow-lg bg-white m-4">

        <!-- Exercise Image -->
        <img class="w-full h-48 object-cover" src="{{ $exercise->image_url }}"
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
