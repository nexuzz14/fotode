<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Media;

class MediaModal extends Component
{
    public $media;
    public $isOpen = false;

    protected $listeners = ['openModal'];

    public function openModal($mediaId)
    {
        $this->media = Media::with('user')->find($mediaId);
        $this->isOpen = true;
    }

    public function closeModal()
    {
        $this->isOpen = false;
    }

    public function render()
    {
        return view('livewire.media-modal');
    }
}