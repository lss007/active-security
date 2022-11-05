<?php

namespace App\Http\Livewire\Frontend;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class HomePage extends Component
{
    public function userlogout(){
        Auth::logout();
        
        }
    public function render()
    {
        return view('livewire.frontend.home-page')->layout('layouts.frontend');
    }
}
