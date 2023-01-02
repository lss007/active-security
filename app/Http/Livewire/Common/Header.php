<?php

namespace App\Http\Livewire\Common;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Header extends Component
{

    public function render()
    {
       
        return view('livewire.common.header');
    }
}
