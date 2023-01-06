<?php

namespace App\Http\Livewire\Common;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Header extends Component
{

    public function render()
    {
       

        return view('livewire.common.header');
    }
}
