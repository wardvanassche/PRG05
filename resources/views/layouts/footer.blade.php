<footer class="bg-white shadow dark:bg-gray-900 m-4">
    <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
        <div class="sm:flex sm:items-center sm:justify-between">
            <a href="{{ Route('home') }}" class="flex items-center mb-4 sm:mb-0 space-x-3 rtl:space-x-reverse">
                <img src="https://wallpapers.com/images/hd/blackand-white-dumbbell-vector-095ijokl1ntmjv0r-2.jpg"
                     class="h-8" alt="ExerciseExplorer Logo"/>
                <span
                    class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">ExerciseExplorer</span>
            </a>
            <ul class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-500 sm:mb-0 dark:text-gray-400">
                <li>
                    <a href="{{ Route('home') }}" class="hover:underline me-4 md:me-6">Home</a>
                </li>
                <li>
                    <a href="{{ Route('exercises') }}" class="hover:underline me-4 md:me-6">Exercises</a>
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
        <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8"/>
        <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a
                href="{{ Route('home') }}" class="hover:underline">ExerciseExplorer™</a>. All Rights Reserved.</span>
    </div>
</footer>

