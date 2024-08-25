<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Media;
use Illuminate\Support\Facades\Auth;

class PhotoUploadModal extends Component
{
    use WithFileUploads;

    public $Open = false;

    protected $listeners = ['openModal' => 'openModal'];

    public function openModal()
    {
        $this->Open = true;
    }

    public function closeModal()
    {
        $this->Open = false;
    }

    public function uploadPhoto()
    {
        $this->validate([
            'file_path' => 'required|image|max:1024', // 1MB Max
            'title' => 'required|string|max:255',
            'descr' => 'nullable|string',
        ]);

        // Store the uploaded file
        $filePath = $this->photo->store('media', 'public');

        // Save the data in the media table
        Media::create([
            'file_path' => $filePath,
            'title' => $this->title,
            'desc' => $this->description,
            'user_id' => Auth::id(), // Assuming users are authenticated
            'likes' => 0, // Initialize likes to 0
        ]);

        // Close the modal after uploading
        $this->closeModal();

        // Optional: Flash a success message or emit an event
    }

    public function render()
    {
        return view('livewire.photo-upload-modal');
    }
}
