<div>
    <div x-data="{ open: @entangle('isOpen'), isDropping: false, fileName: '' }">
        <!-- Round Button to open modal, positioned in the bottom-right corner -->
        <button @click="open = true" class="bg-blue-500 text-white font-bold rounded-full p-4 fixed bottom-4 right-4 hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75 z-50">
            <span class="text-xl">+</span>
        </button>
    
        <!-- Modal Background -->
        <div x-show="open" class="fixed inset-0 flex items-center justify-center z-40">
            <!-- Modal -->
            <div class="bg-white rounded-lg shadow-lg p-6 w-full max-w-md relative">
                <!-- Close Button -->
                <button @click="open = false" class="absolute top-2 right-2 text-gray-500 hover:text-gray-700">
                    &times;
                </button>
                
                <!-- Modal Content -->
                <form wire:submit.prevent="uploadPhoto" class="space-y-4">
                    <!-- Drag-and-Drop or File Picker Upload -->
                    <div 
                        x-on:dragover.prevent="isDropping = true" 
                        x-on:dragleave.prevent="isDropping = false" 
                        x-on:drop.prevent="isDropping = false" 
                        x-on:drop="() => { isDropping = false; $refs.fileInput.files = $event.dataTransfer.files; $refs.fileInput.dispatchEvent(new Event('change', { bubbles: true })); }"
                        class="border-2 border-dashed border-gray-300 rounded-lg p-6 text-center cursor-pointer hover:border-gray-400"
                        x-bind:class="{ 'border-blue-400': isDropping }"
                        @click="$refs.fileInput.click()"
                    >
                        <input type="file" wire:model="photo" class="hidden" x-ref="fileInput" @change="fileName = $refs.fileInput.files[0]?.name">
                        <template x-if="fileName">
                            <p class="text-gray-700">File Selected: <span class="font-bold" x-text="fileName"></span></p>
                        </template>
                        <p class="text-gray-500" x-show="!isDropping && !fileName">Drag and drop files or click to select</p>
                        <p class="text-blue-500" x-show="isDropping">Drop the files here...</p>
    
                        <!-- Progress Bar -->
                        <div x-show="isUploading">
                            <progress max="100" x-bind:value="progress"></progress>
                        </div>
                    </div>
                    @error('photo') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
    
                    <!-- Title -->
                    <div>
                        <input type="text" wire:model="title" placeholder="Judul Foto" class="w-full p-2 border rounded">
                        @error('title') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                    </div>
    
                    <!-- Description -->
                    <div>
                        <textarea wire:model="description" placeholder="Deskripsi Foto" class="w-full p-2 border rounded"></textarea>
                        @error('description') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                    </div>
    
                    <!-- Upload Button -->
                    <button type="submit" class="bg-green-500 text-white font-bold py-2 px-4 rounded w-full">
                        Upload
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
