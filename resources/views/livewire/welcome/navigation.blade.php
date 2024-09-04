<nav class="flex justify-between items-center py-4 bg-gray-50">
    <!-- Logo -->
    <div class="flex items-center">
        <img src="img/logo.png" alt="Logo" class="h-10">
    </div>

    <!-- Search Bar -->
    <livewire:search-bar />

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
