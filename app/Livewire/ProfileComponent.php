<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ProfileComponent extends Component
{
    public $user;

    public function mount()
    {
        $this->user = Auth::user(); // Get the currently authenticated user
    }

    public function openModal()
    {
        $this->emit('openModal'); // Emitting the event named 'openModal'
    }

    public function render()
    {
        return view('livewire.profile-component');
    }
}
