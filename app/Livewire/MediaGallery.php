<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Media;

class MediaGallery extends Component
{
    public $media;

    public function mount()
    {
        $this->media = Media::with('user')->get();
    }

    public function selectMedia($mediaId)
    {
        $this->emit('openModal', $mediaId); // Menggunakan $this->emit untuk memancarkan event
    }

    public function render()
    {
        return view('livewire.media-gallery');
    }
}
