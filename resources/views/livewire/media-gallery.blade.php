<div>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 p-4">
        @foreach($media as $item)
        <div class="border rounded-lg overflow-hidden shadow-lg cursor-pointer" @click="$wire.selectMedia({{ $item->id }})">
            <!-- Foto/Media -->
            <img src="{{ asset('storage/' . $item->file_path) }}" alt="{{ $item->title }}" class="w-full h-48 object-cover">
            
            <!-- Bagian Bawah untuk Profil Pict, Nama Pengguna, dan Judul -->
            <div class="p-4 bg-white flex items-center justify-between">
                <div class="flex items-center space-x-3">
                    <img src="{{ asset('storage/' . $item->user->file_path) }}" alt="{{ $item->user->name }}" class="w-10 h-10 rounded-full object-cover">
                    <div>
                        <div class="text-gray-600 font-bold">{{ $item->title }}</div>
                        <div class="text-gray-800 text-sm ">{{ $item->user->name }}</div>
                    </div>
                </div>
                <div class="text-gray-600">
                    <span class="font-bold">{{ $item->likes }}</span> ❤️
                </div>
            </div>
        </div>
        @endforeach
    </div>
    
    <livewire:media-modal />
    
    
</div>
