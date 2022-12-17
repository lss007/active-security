<?php

namespace App\Http\Livewire\Backend\Pages\Cookie;

use App\Models\Cookie;
use Livewire\Component;

class ViewCookie extends Component
{
    public $getCookies;
    public function render()
    {
                $this->getCookies =   Cookie::first();
        return view('livewire.backend.pages.cookie.view-cookie')->layout('layouts.backend');
    }
}
