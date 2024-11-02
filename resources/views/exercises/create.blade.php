@auth
    <x-app-layout title="Create Exercise">
        <div class="max-w-md mx-auto my-10 p-5 bg-white rounded shadow-lg">
            <h1 class="text-2xl font-semibold mb-6 text-center">Create a New Exercise</h1>
            <form action="{{ route('exercises.index') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 font-medium mb-2">Exercise Name</label>
                    <input
                        class="w-full bg-gray-200 text-gray-700 border border-gray-300 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-500"
                        id="name" name="name" type="text" placeholder="e.g., Bench Press" required>
                </div>
                <div class="mb-4">
                    <label for="description" class="block text-gray-700 font-medium mb-2">Description</label>
                    <textarea
                        class="w-full bg-gray-200 text-gray-700 border border-gray-300 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-500"
                        id="description" name="description" rows="4" placeholder="Enter a brief description"
                        required></textarea>
                </div>
                <div class="mb-4">
                    <label for="category_id" class="block text-gray-700 font-medium mb-2">Select a Category</label>
                    <select
                        class="w-full bg-gray-200 text-gray-700 border border-gray-300 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-500"
                        id="category_id" name="category_id" required>
                        <option value="">Select a Category</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-4">
                    <label for="image" class="block text-gray-700 font-medium mb-2">Image</label>
                    <input
                        class="w-full bg-gray-200 text-gray-700 border border-gray-300 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-500"
                        id="image" name="image" type="url" placeholder="Add image url">
                </div>
                <button type="submit"
                        class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-3 rounded focus:outline-none focus:shadow-outline">
                    Create Exercise
                </button>
            </form>
        </div>
    </x-app-layout>
@endauth
