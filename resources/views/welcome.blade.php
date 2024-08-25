<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>USP</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        @livewireStyles
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased font-sans">
        <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
            <div class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
                <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
                    <header class="items-center gap-2 py-10 lg:grid-cols-3">
                        @if (Route::has('login'))
                            <livewire:welcome.navigation />
                        @endif
                    </header>

                    <main class="grid grid-cols-1 lg:grid-cols-2 gap-8 mt-6">
                        <!-- Text Section -->
                        <div class="flex flex-col justify-center">
                            <h1 class="text-4xl font-bold text-gray-900 dark:text-white mb-4">
                                Discover, and collect Digital Photo
                            </h1>
                            <p class="text-gray-600 dark:text-gray-400 mb-6">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                            </p>
                            <a href="#" class="inline-flex items-center w-1/5 px-3 py-1 bg-orange-400 text-white rounded-md shadow-md hover:bg-orange-500">
                                Explore Now
                            </a>
                        </div>
                    
                        <!-- Image Section (Now the Carousel) -->
                        <div class="relative">
                            <livewire:carousel />
                        </div>
                    </main>

                    <footer class="py-16 text-center text-sm text-black dark:text-white/70">

                    </footer>
                </div>
            </div>
        </div>
        @livewireScripts
    </body>
</html>
