<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;

class Unternehmen extends Component
{
    public function render()
    {
        return view('livewire.frontend.unternehmen')->layout('layouts.frontend');
    }
}
