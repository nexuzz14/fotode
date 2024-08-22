<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    
    <div class="p-4">
        <div class="p-4 grid grid-cols-2 md:grid-cols-4 gap-4">
            <!-- First Image Card -->
            <a href="#link1" class="relative block">
                <img class="h-auto w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image.jpg" alt="">
                <div class="absolute bottom-1 md:bottom-4 lg:bottom-8 left-0 text-white p-2">
                    <div class="flex items-center">
                        <img class="h-8 w-8 rounded-full border-2 border-black" src="https://flowbite.s3.amazonaws.com/docs/gallery/profile.jpg" alt="Profile Picture">
                        <div class="ml-2">
                            <p class="text-xs text-black">Judul Gambar</p>
                            <h3 class="text-sm font-semibold text-black">Nama Pengguna</h3>
                        </div>
                    </div>
                </div>
            </a>
    
            <!-- Second Image Card -->
            <a href="#link2" class="relative block">
                <img class="h-auto w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-1.jpg" alt="">
                <div class="absolute bottom-10 md:bottom-20 lg:bottom-40 left-0 text-white p-2">
                    <div class="flex items-center">
                        <img class="h-8 w-8 rounded-full border-2 border-black" src="https://flowbite.s3.amazonaws.com/docs/gallery/profile.jpg" alt="Profile Picture">
                        <div class="ml-2">
                            <p class="text-xs text-black">Judul Gambar</p>
                            <h3 class="text-sm font-semibold text-black">Nama Pengguna</h3>
                        </div>
                    </div>
                </div>
            </a>
            
            <!-- Additional cards can be added similarly -->
        </div>
    </div>
    
    
    
        
    

</x-app-layout>
