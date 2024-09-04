<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Media;

class ViewModalComponent extends Component
{
    public $media;
    public $show1 = false;
    public $title;
    public $desc;

    protected $listeners = ['openModal'];

    // Method to open the modal and load media details
    public function openModal($mediaId)
{
    $this->media = Media::find($mediaId);

    if ($this->media) {
        $this->title = $this->media->title;
        $this->desc = $this->media->desc;
        $this->show1 = true;
    } else {
        // Handle the case where the media does not exist
        $this->show1 = false;
        session()->flash('error', 'Media not found or might have been deleted.');
    }
}


    // Method to close the modal
    public function closeModal()
    {
        $this->show1 = false;
    }

    // Method to update media title and description
    public function updateMedia()
    {
        $this->media->title = $this->title;
        $this->media->desc = $this->desc;
        $this->media->save();

        $this->closeModal();  // Close modal after update
        session()->flash('message', 'Media updated successfully.');
    }

    // Method to delete media
    public function deleteMedia()
    {
        $this->media->delete();

        $this->closeModal();  // Close modal after delete
        session()->flash('message', 'Media deleted successfully.');
    }

    public function render()
    {
        return view('livewire.view-modal-component');
    }
}
