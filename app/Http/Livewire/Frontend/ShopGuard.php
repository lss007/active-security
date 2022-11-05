<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;

class ShopGuard extends Component
{
    public function render()
    {
        return view('livewire.frontend.shop-guard')->layout('layouts.frontend');
    }
}
