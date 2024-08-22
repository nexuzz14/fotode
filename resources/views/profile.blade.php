<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            
            <!-- Profile Picture and Name Section -->
            <div class="text-center relative">
                <div class="relative inline-block">
                    <img src="img/testing/al.jpg" alt="Profile Picture" class="mx-auto rounded-full w-24 h-24 object-cover">
                    
                    <!-- Pencil Icon Button -->
                    <button class="absolute bottom-0 right-0 bg-purple-500 text-white rounded-full p-2 hover:bg-purple-600 focus:outline-none">
                        <!-- Font Awesome Icon or SVG for Pencil -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M17.414 2.586a2 2 0 00-2.828 0L4 13.172V16h2.828l10.586-10.586a2 2 0 000-2.828zM7 14H5v-2l9.293-9.293 2 2L7 14z" />
                        </svg>
                    </button>
                </div>
                
                <h2 class="mt-4 text-xl font-semibold text-gray-800 dark:text-gray-200">Kim Al Fa</h2>
                <hr class="my-4 border-t border-gray-300 dark:border-gray-600 w-1/2 mx-auto">
            </div>
    
            <!-- Cards Section -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                <!-- Card 1 -->
                <div class="bg-white dark:bg-gray-800 shadow rounded-lg p-4">
                    <img src="img/testing/gunung.jpg" alt="Gunung Kembar" class="rounded-lg w-full h-40 object-cover">
                    <h3 class="mt-2 text-gray-800 dark:text-gray-200">Gunung Kembar</h3>
                    <div class="flex justify-between mt-2">
                        <span class="text-gray-600 dark:text-gray-400">❤️ 999</span>
                        <a href="#" class="text-purple-500 hover:underline">View</a>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="bg-white dark:bg-gray-800 shadow rounded-lg p-4">
                    <img src="image-url-2.jpg" alt="Kelopak Bunga Anggrek Pontianak" class="rounded-lg w-full h-40 object-cover">
                    <h3 class="mt-2 text-gray-800 dark:text-gray-200">Kelopak Bunga Anggrek Pontianak</h3>
                    <div class="flex justify-between mt-2">
                        <span class="text-gray-600 dark:text-gray-400">❤️ 999</span>
                        <a href="#" class="text-purple-500 hover:underline">View</a>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="bg-white dark:bg-gray-800 shadow rounded-lg p-4">
                    <img src="img/testing/al.jpg" alt="Babang Al Milos" class="rounded-lg w-full h-40 object-cover">
                    <h3 class="mt-2 text-gray-800 dark:text-gray-200">Babang Al Milos</h3>
                    <div class="flex justify-between mt-2">
                        <span class="text-gray-600 dark:text-gray-400">❤️ 999</span>
                        <a href="#" class="text-purple-500 hover:underline">View</a>
                    </div>
                </div>
                <!-- Card 4 -->
                <div class="bg-white dark:bg-gray-800 shadow rounded-lg p-4">
                    <img src="image-url-4.jpg" alt="Sunset In Tuguran" class="rounded-lg w-full h-40 object-cover">
                    <h3 class="mt-2 text-gray-800 dark:text-gray-200">Sunset In Tuguran</h3>
                    <div class="flex justify-between mt-2">
                        <span class="text-gray-600 dark:text-gray-400">❤️ 999</span>
                        <a href="#" class="text-purple-500 hover:underline">View</a>
                    </div>
                </div>
                <!-- Card 5 -->
                <div class="bg-white dark:bg-gray-800 shadow rounded-lg p-4">
                    <img src="img/testing/sp.jpg" alt="Gunung siapa tuch?" class="rounded-lg w-full h-40 object-cover">
                    <h3 class="mt-2 text-gray-800 dark:text-gray-200">Gunung siapa tuch?</h3>
                    <div class="flex justify-between mt-2">
                        <span class="text-gray-600 dark:text-gray-400">❤️ 999</span>
                        <a href="#" class="text-purple-500 hover:underline">View</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    
</x-app-layout>
