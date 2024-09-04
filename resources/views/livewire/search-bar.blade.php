<div>
    <div class="relative text-gray-600 w-full max-w-xs sm:max-w-md lg:max-w-lg">
        <input type="search" name="search" placeholder="Search" wire:model="search" class="bg-white h-10 w-full px-5 pr-10 rounded-full text-sm focus:outline-none">
        
        @if($search)
            <div class="absolute bg-white border rounded-lg mt-2 w-full z-50">
                @forelse($results as $result)
                    <div class="p-2 hover:bg-gray-100">{{ $result->name }}</div>
                @empty
                    <div class="p-2 text-gray-500">No results found</div>
                @endforelse
            </div>
        @endif
    </div>
    
</div>
