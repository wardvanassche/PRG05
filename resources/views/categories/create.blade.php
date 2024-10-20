<x-app-layout title="Create Category">
    <div class="justify-center m-auto my-10">
        <form class="" action="{{ route('categories.index') }}" method="POST">
            @csrf
            <input
                class="bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                id="name" name="name" type="text" placeholder="Chest">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold rounded py-3 px-4 pr-8">
                Create
            </button>
        </form>
    </div>
</x-app-layout>
