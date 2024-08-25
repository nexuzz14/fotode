<?php

namespace App\Livewire;

use Livewire\Component;

class ModalComponent extends Component
{
    public $show = false;

    protected $listeners = ['openModal' => 'openModal'];

    public function openModal()
    {
        $this->show = true;
    }

    public function closeModal()
    {
        $this->show = false;
    }

    public function render()
    {
        return view('livewire.modal-component');
    }
}
