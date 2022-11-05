<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;

class Datenschutz extends Component
{
    public function render()
    {
        return view('livewire.frontend.datenschutz')->layout('layouts.frontend');
    }
}
