<header>
    <nav class="border-gray-200 bg-gray-900 flex items-center py-8">
        <!-- Left Navigation (Home, Exercises, etc.) -->
        <div class="flex-1 flex items-center px-5" id="navbar-default">
            <!-- Logo on the Left -->
            <a href="{{ route('home') }}" class="flex items-center space-x-3 rtl:space-x-reverse mr-8">
                <img src="{{ Vite::asset('resources/images/logo.png') }}" alt="Logo" class="h-10"/>
            </a>

            <!-- Navigation Links -->
            <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 rounded-lg md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0">
                <li>
                    <a href="{{ route('home') }}"
                       class="block py-2 px-3 md:p-0 text-white hover:opacity-50">Home</a>
                </li>
                <li>
                    <a href="{{ route('exercises.index') }}"
                       class="block py-2 px-3 md:p-0 text-white hover:opacity-50">Exercise</a>
                </li>
                @if(Route::has('login'))
                    @auth
                        <li>
                            <a href="{{ route('exercises.create') }}"
                               class="block py-2 px-3 md:p-0 text-white hover:opacity-50">Create Exercise</a>
                        </li>
                    @endif
                @endauth
            </ul>
        </div>

        <!-- Right Login/Register or Dashboard Links -->
        <div class="flex-1 flex justify-end px-3">
            @if (Route::has('login'))
                @auth
                    <a href="{{ url('/dashboard') }}"
                       class="text-white hover:opacity-50 px-3 py-2 ring-1 ring-transparent transition focus:outline-none focus-visible:ring-[#FF2D20]">
                        Dashboard
                    </a>
                @else
                    <a href="{{ url('/login') }}"
                       class="text-white hover:opacity-50 px-3 py-2 ring-1 ring-transparent transition focus:outline-none focus-visible:ring-[#FF2D20]">
                        Login
                    </a>

                    @if (Route::has('register'))
                        <a href="{{ url('/register') }}"
                           class="text-white hover:opacity-50 px-3 py-2 ring-1 ring-transparent transition focus:outline-none focus-visible:ring-[#FF2D20]">
                            Register
                        </a>
                    @endif
                @endauth
            @endif
        </div>
    </nav>
</header>
