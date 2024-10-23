@foreach($exercises as $exercise)
    <div class="w-1/5 rounded overflow-hidden shadow-lg mx-5 p-3">
        <img class="w-full" src="" alt="picture of exercise">
        <div class="px-6 py-4">
            <div class="font-bold text-xl mb-2">{{ $exercise->name }}</div>
            <p class="text-gray-700 text-base">
                {{ $exercise->description }}
            </p>
        </div>
        <div class="px-6 pt-4 pb-2">
            <span
                class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">{{ $exercise->category_id }}</span>
            <a href="">Details</a>
        </div>
    </div>
@endforeach
