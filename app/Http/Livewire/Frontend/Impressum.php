<?php

namespace App\Http\Livewire\Frontend;

use App\Models\FooterContactAddress;
use Livewire\Component;

class Impressum extends Component
{
    public $getAddress;
    public function render()
    {
        $this->getAddress = FooterContactAddress::first();
        return view('livewire.frontend.impressum')->layout('layouts.frontend');
    }
}
