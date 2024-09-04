<?php

namespace App\Livewire;

use Livewire\Component;


class Carousel extends Component
{
    public $currentSlide = 0;
    public $totalSlides = 2; // Adjust this based on the number of slides

    public function prevSlide()
    {
        $this->currentSlide = ($this->currentSlide > 0) ? $this->currentSlide - 1 : $this->totalSlides - 1;
    }

    public function nextSlide()
    {
        $this->currentSlide = ($this->currentSlide < $this->totalSlides - 1) ? $this->currentSlide + 1 : 0;
    }

    public function render()
    {
        return view('livewire.carousel');
    }
}


