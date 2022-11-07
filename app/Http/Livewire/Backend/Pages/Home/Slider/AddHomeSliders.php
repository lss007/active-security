<?php

namespace App\Http\Livewire\Backend\Pages\Home\Slider;

use Livewire\Component;

class AddHomeSliders extends Component
{
    public function render()
    {
        return view('livewire.backend.pages.home.slider.add-home-sliders')->layout('layouts.backend');
    }
}
