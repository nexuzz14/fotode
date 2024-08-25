<div>
   <!-- Main Content -->
   <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
        
        <!-- Profile Picture and Name Section -->
        <div class="text-center relative">
            <!-- Profile Picture -->
            <div class="relative inline-block">
                <img src="{{ asset($user->file_path) }}" alt="Profile Picture" class="rounded-full w-24 h-24 object-cover">
            
                <!-- Pencil Icon Button to Trigger Modal -->
                <a href="#" wire:click.prevent="openModal" class="absolute bottom-0 right-0 bg-purple-500 text-white rounded-full p-2 hover:bg-purple-600 focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M17.414 2.586a2 2 0 00-2.828 0L4 13.172V16h2.828l10.586-10.586a2 2 0 000-2.828zM7 14H5v-2l9.293-9.293 2 2L7 14z" />
                    </svg>
                </a>
            </div>
            <h2 class="mt-4 text-xl font-semibold text-gray-800 dark:text-gray-200">{{ $user->name }}</h2>
            <hr class="my-4 border-t border-gray-300 dark:border-gray-600 w-1/2 mx-auto">
        </div>

        <!-- Cards Section -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            @livewire('media-list-component')
        </div>
    </div>
</div>
</div>
