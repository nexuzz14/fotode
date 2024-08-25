<div>
    <!-- Button to open the modal -->
    <button 
        class="fixed bottom-4 right-4 bg-green-500 text-white rounded-full p-4 shadow-lg focus:outline-none"
        wire:click="openModal">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
        </svg>
    </button>

    <!-- Modal -->
    @if($Open)
    <div class="fixed inset-0 flex items-center justify-center bg-gray-800 bg-opacity-75 z-50">
        <div class="bg-white rounded-lg shadow-lg w-1/3">
            <div class="p-4 flex justify-between items-center border-b">
                <h3 class="text-lg font-semibold">Upload Photo</h3>
                <button class="text-gray-400 hover:text-gray-600" wire:click="closeModal">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <div class="p-4">
                <form wire:submit.prevent="uploadPhoto">
                    <div class="mb-4">
                        <label for="photo" class="block text-gray-700">Photo</label>
                        <input type="file" wire:model="photo" class="w-full p-2 border rounded-md">
                        @error('photo') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                    </div>
                    
                    <div class="mb-4">
                        <label for="title" class="block text-gray-700">Title</label>
                        <input type="text" wire:model="title" class="w-full p-2 border rounded-md">
                        @error('title') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                    </div>
                    
                    <div class="mb-4">
                        <label for="description" class="block text-gray-700">Description</label>
                        <textarea wire:model="description" class="w-full p-2 border rounded-md"></textarea>
                        @error('description') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                    </div>

                    <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded-md hover:bg-green-600">
                        Upload
                    </button>
                </form>
            </div>
        </div>
    </div>
    @endif
</div>
