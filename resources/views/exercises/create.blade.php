<x-app-layout title="Create Exercise">
    <div class="w-3/4 m-auto justify-center my-10">
        <form class="" action="{{ route('exercises.index') }}" method="POST">
            @csrf
            <input
                class="bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                id="name" name="name" type="text" placeholder="Bench Press">
            <input
                class="bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                id="description" name="description" type="text" placeholder="...">
            <select
                class="bg-gray-200 text-gray-700 border rounded py-3 px-4 pr-8 leading-tight focus:outline-none focus:bg-white"
                id="category" name="category_id">
                <option>Chest</option>
                <option>Back</option>
                <option>Shoulders</option>
            </select>
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold rounded py-3 px-4 pr-8">
                Create
            </button>
        </form>
    </div>
</x-app-layout>
