<div>
<div class="flex flex-wrap gap-6">
    @if($mediaItems->isEmpty())
        <p>KOSONG BRO</p>
    @else
        @foreach($mediaItems as $media)
        <div class="bg-white dark:bg-gray-800 shadow rounded-lg p-4 w-64"> <!-- Adjust the width as needed -->
            <img src="{{ Storage::url($media->file_path) }}" alt="{{ $media->title }}" class="rounded-lg w-full h-40 object-cover">
            <h3 class="mt-2 text-gray-800 dark:text-gray-200">{{ $media->title }}</h3>
            <p class="text-gray-600 dark:text-gray-400">{{ $media->desc }}</p>
            <div class="flex justify-between mt-2">
                <span class="text-gray-600 dark:text-gray-400">❤️ {{ $media->likes }}</span>
                <a href="#" wire:click.prevent="$emit('openModal', {{ $media->id }})" class="text-purple-500 hover:underline">View</a>
            </div>
        </div>
        @endforeach
    @endif
</div>
</div>