<nav class="flex justify-between items-center py-4 bg-gray-50">
    <!-- Logo -->
    <div class="flex items-center">
        <img src="img/logo.png" alt="Logo" class="h-10">
    </div>

    <!-- Search Bar -->
    <div class="relative text-gray-600 w-full max-w-xs sm:max-w-md lg:max-w-lg">
        <input type="search" name="search" placeholder="Search" class="bg-white h-30 w-full px-5 pr-10 rounded-full text-sm focus:outline-none">
        <button type="submit" class="absolute right-0 top-0 mt-3 mr-4">
            <svg class="h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 56.966 56.966">
                <path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z"></path>
            </svg>
        </button>
    </div>

    <!-- Auth Links -->
    <div class="flex items-center">
        @auth
            <a href="{{ url('/dashboard') }}" class="px-4 py-2 text-gray-700 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-gray-400">
                Dashboard
            </a>
        @else
            <a href="{{ route('login') }}" class="px-4 py-2 text-gray-700 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-gray-400">
                Log in
            </a>
            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-2 px-4 py-2 text-gray-700 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-gray-400">
                    Register
                </a>
            @endif
        @endauth
    </div>
</nav>
