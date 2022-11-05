<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;

class Impressum extends Component
{
    public function render()
    {
        return view('livewire.frontend.impressum')->layout('layouts.frontend');
    }
}
