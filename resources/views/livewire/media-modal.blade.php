<div>
    <div>
        <!-- Modal Pop-up -->
        <div x-data="{ open: @entangle('isOpen') }" x-show="open" class="fixed inset-0 bg-black bg-opacity-75 flex items-center justify-center z-50" x-cloak>
            <div class="bg-white rounded-lg shadow-lg overflow-hidden w-full max-w-2xl p-6">
                <div class="flex justify-between items-start">
                    <!-- Gambar -->
                    <div class="w-1/2">
                        <img :src="`/storage/${$wire.media.file_path}`" alt="" class="w-full h-full object-cover">
                    </div>
    
                    <!-- Detail -->
                    <div class="w-1/2 pl-4">
                        <h2 class="text-2xl font-bold text-gray-800" x-text="$wire.media.title"></h2>
                        <p class="text-gray-600 mt-2" x-text="$wire.media.desc"></p>
                        <div class="flex items-center mt-4">
                            <img :src="`/storage/${$wire.media.user.file_path}`" alt="" class="w-10 h-10 rounded-full object-cover">
                            <span class="ml-3 font-bold text-gray-800" x-text="$wire.media.user.name"></span>
                        </div>
                        <div class="flex items-center justify-between mt-6">
                            <div class="text-gray-600">
                                <span class="font-bold" x-text="$wire.media.likes"></span> ❤️
                            </div>
                            <a :href="`/download/${$wire.media.id}`" class="bg-orange-500 text-white px-4 py-2 rounded-lg">Download</a>
                        </div>
                    </div>
    
                    <!-- Close Button -->
                    <button @click="open = false; $wire.closeModal()" class="absolute top-0 right-0 mt-4 mr-4 text-gray-600 hover:text-gray-900">
                        &times;
                    </button>
                </div>
            </div>
        </div>
    </div>
    
</div>
