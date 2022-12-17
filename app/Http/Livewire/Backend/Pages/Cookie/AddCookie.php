<?php

namespace App\Http\Livewire\Backend\Pages\Cookie;

use Livewire\Component;

class AddCookie extends Component
{
    public function render()
    {
        return view('livewire.backend.pages.cookie.add-cookie')->layout('layouts.backend');
    }
}
