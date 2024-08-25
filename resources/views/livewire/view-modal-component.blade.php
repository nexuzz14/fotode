<div>
    @if($show)
    <div class="fixed inset-0 bg-gray-600 bg-opacity-50 flex items-center justify-center z-50">
        <div class="bg-white rounded-lg shadow-lg w-1/3">
            <div class="px-6 py-4">
                <div class="flex justify-between items-center">
                    <h3 class="text-lg font-semibold">{{ $media->title }}</h3>
                    <button wire:click="closeModal" class="text-gray-500 hover:text-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="mt-4">
                    <p>{{ $media->desc }}</p>
                    <img src="{{ asset($media->file_path) }}" alt="{{ $media->title }}" class="w-full h-40 object-cover mt-4">
                </div>
                <div class="text-right mt-4">
                    <button wire:click="closeModal" class="px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-700">Close</button>
                </div>
            </div>
        </div>
    </div>
    @endif
</div>
