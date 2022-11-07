<?php

namespace App\Http\Livewire\Backend\Pages\Home\Slider;

use Livewire\Component;

class ViewHomeSliders extends Component
{
    public function render()
    {
        return view('livewire.backend.pages.home.slider.view-home-sliders')->layout('layouts.backend');
    }
}
