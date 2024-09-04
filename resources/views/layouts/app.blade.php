    <!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="csrf-token" content="{{ csrf_token() }}">

            <title>USP</title>

            <!-- Fonts -->
            <link rel="preconnect" href="https://fonts.bunny.net">
            <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

            <!-- Scripts -->
            @livewireStyles
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        </head>
        <body class="font-sans antialiased">
            <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
                <livewire:layout.navigation />

                <!-- Page Heading -->
                @if (isset($header))
                    <header class="bg-white dark:bg-gray-800 shadow">
                        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                            {{ $header }}
                        </div>
                    </header>
                @endif

                <!-- Page Content -->
                <main>
                    {{ $slot }}
                    <!-- Modal Upload Media -->
                    <livewire:modal-photo-upload />
                </main>
            </div>
            
            <livewire:layout.footer />
            
            @livewireScripts

            <script>
                Livewire.on('photoUploaded', () => {
                    // Handle the event, e.g., close the modal or show a notification
                    alert('Photo uploaded successfully!');
                });
            </script>
        </body>
    </html>
