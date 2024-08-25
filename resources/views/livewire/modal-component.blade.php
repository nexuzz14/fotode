<div>
    @if($show)
    <div class="fixed inset-0 bg-gray-600 bg-opacity-50 flex items-center justify-center z-50">
        <!-- Modal Content -->
        <div class="bg-white rounded-lg shadow-lg w-full max-w-lg mx-4">
            <div class="px-6 py-4">
                <div class="flex justify-between items-center">
                    <h3 class="text-lg font-semibold">Edit Profile</h3>
                    <button wire:click="closeModal" class="text-gray-500 hover:text-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="mt-4">
                    <!-- Include your form or other content here -->
                    <livewire:profile.update-profile-information-form />
                </div>
            </div>
        </div>
    </div>
@endif
</div>
