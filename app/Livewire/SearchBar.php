<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Media; // Ganti dengan model yang relevan

class SearchBar extends Component
{
    public $search = '';

    public function updatedSearch()
    {
        // Fungsi ini akan dipanggil setiap kali nilai 'search' diperbarui
        $this->emit('searchUpdated', $this->search);
    }

    public function render()
    {
        // Cari item berdasarkan input pencarian
        $results = [];
        if ($this->search) {
            $results = Media::where('title', 'like', '%' . $this->search . '%')->get();
        }

        return view('livewire.search-bar', [
            'results' => $results,
        ]);
    }
}
