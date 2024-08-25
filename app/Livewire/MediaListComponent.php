<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Media; // Ensure you have the Media model
use Illuminate\Support\Facades\Auth;

class MediaListComponent extends Component
{
    public $mediaItems;

    public function mount()
    {
        // Fetch media items for the logged-in user
        $this->mediaItems = Media::where('user_id', Auth::id())->get();
    }

    public function render()
    {
        return view('livewire.media-list-component', [
            'mediaItems' => $this->mediaItems, // Pass the media items to the view
        ]);
    }
}