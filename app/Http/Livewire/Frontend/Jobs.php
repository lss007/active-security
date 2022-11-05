<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;

class Jobs extends Component
{
    public function render()
    {
        return view('livewire.frontend.jobs')->layout('layouts.frontend');
    }
}
