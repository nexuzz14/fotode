<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Media;


class ViewModalComponent extends Component
{
    public $media;
    public $show = false;

    protected $listeners = ['openModal'];

    public function openModal($mediaId)
    {
        $this->media = Media::find($mediaId);
        $this->show = true;
    }

    public function closeModal()
    {
        $this->show = false;
    }

    public function render()
    {
        return view('livewire.view-modal-component');
    }
}