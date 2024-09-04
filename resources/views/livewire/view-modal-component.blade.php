<div>
    
    <div x-data="{ show1: @entangle('show1') }">
        <div x-show="show1" class="fixed inset-0 bg-gray-600 bg-opacity-50 flex items-center justify-center z-50">
            <div class="bg-white rounded-lg shadow-lg w-1/3">
                <div class="px-6 py-4">
                    <div class="flex justify-between items-center">
                        <input type="text" wire:model="title" class="border border-gray-300 rounded p-2 w-full text-lg font-semibold" placeholder="Edit Title">
                        <button @click="show1 = false" class="text-gray-500 hover:text-gray-700">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                    @if($media)
                    <div class="mt-4">
                        <img src="{{ asset($media->file_path) }}" alt="{{ $media->title }}" class="w-full h-60 object-cover rounded-lg">
                    </div>
                    <textarea wire:model="desc" class="border border-gray-300 rounded p-2 mt-4 w-full" placeholder="Edit Description"></textarea>
                    <div class="mt-4 flex items-center justify-between">
                        <div class="flex items-center">
                            <img class="h-8 w-8 rounded-full" src="https://ui-avatars.com/api/?name={{ urlencode($media->user->name) }}&background=random" alt="{{ $media->user->name }}">
                            <p class="ml-2 text-gray-800">{{ $media->user->name }}</p>
                        </div>
                        <p class="text-gray-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="inline h-5 w-5 text-gray-500" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 015.656 5.656L10 17.828l-6.828-6.828a4 4 0 010-5.656z" clip-rule="evenodd" />
                            </svg> {{ $media->likes }}
                        </p>
                    </div>
                    <div class="mt-4 flex items-center justify-between">
                        <button wire:click="updateMedia" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">
                            Save Changes
                        </button>
                        <button wire:click="deleteMedia" class="px-4 py-2 bg-red-500 text-white rounded hover:bg-red-600">
                            Delete
                        </button>
                        <button @click="show1 = false" class="px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-700">
                            Close
                        </button>
                    </div>
                    @else
                        <p class="text-red-500">No media found or the media might have been deleted.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
    
    

</div>