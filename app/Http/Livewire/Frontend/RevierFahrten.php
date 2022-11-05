<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;

class RevierFahrten extends Component
{
    public function render()
    {
        return view('livewire.frontend.revier-fahrten')->layout('layouts.frontend');
    }
}
