<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Media;
use Illuminate\Support\Facades\Auth;

class ModalPhotoUpload extends Component
{
    use WithFileUploads;

    public $isOpen = false;
    public $photo;
    public $title;
    public $description;

    public function uploadPhoto()
    {
        // Ensure a user is authenticated
        if (!Auth::check()) {
            // Handle the case where no user is authenticated (optional)
            throw new \Exception("No authenticated user found.");
        }
    
        // Validate the input
        $this->validate([
            'photo' => 'required|image|max:1024', // 1MB Max
            'title' => 'required|string|max:255',
            'description' => 'nullable|string|max:1000',
        ]);
    
        // Store the uploaded photo
        $filePath = $this->photo->store('photos', 'public');
    
        // Save the media record in the database
        Media::create([
            'file_path' => $filePath,
            'title' => $this->title,
            'desc' => $this->description,
            'likes' => 0,
            'user_id' => Auth::id(), // Safely use the authenticated user's ID
        ]);
    
        // Close the modal and reset input fields
        $this->reset(['photo', 'title', 'description']);
        $this->isOpen = false;
    
        // Emit an event to notify the front-end about the upload
        $this->emit('photoUploaded');
    }

    public function render()
    {
        return view('livewire.modal-photo-upload');
    }
}
