<footer class="shadow bg-gray-900 m-4 flex items-center justify-between">
    <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
        <div class="sm:flex sm:items-center sm:justify-between">
            <!-- Logo on the Left -->
            <a href="{{ route('home') }}" class="flex items-center space-x-3 rtl:space-x-reverse mb-4 sm:mb-0">
                <img src="{{ Vite::asset('resources/images/logo.png') }}" alt="Logo" class="h-8"/>
                <!-- Increased size here -->
            </a>

            <!-- Footer Links -->
            <ul class="flex flex-wrap items-center text-sm font-medium text-gray-400">
                <li>
                    <a href="{{ route('home') }}" class="hover:underline me-4 md:me-6">Home</a>
                </li>
                <li>
                    <a href="{{ route('exercises.index') }}" class="hover:underline me-4 md:me-6">Exercises</a>
                </li>
                @if (Route::has('login'))
                    @auth
                        <li>
                            <a href="{{ url('/dashboard') }}" class="hover:underline me-4 md:me-6">Dashboard</a>
                        </li>
                    @else
                        <li>
                            <a href="{{ route('login') }}" class="hover:underline me-4 md:me-6">Log in</a>
                        </li>
                        @if (Route::has('register'))
                            <li>
                                <a href="{{ route('register') }}" class="hover:underline me-4 md:me-6">Register</a>
                            </li>
                        @endif
                    @endauth
                @endif
            </ul>
        </div>

        <hr class="my-6 sm:mx-auto border-gray-700 lg:my-8"/>

        <!-- Copyright Information -->
        <span class="block text-sm sm:text-center text-gray-400">© 2024 <a
                href="{{ route('home') }}" class="hover:underline">ExerciseExplorer™</a>. All Rights Reserved.</span>
    </div>
</footer>
