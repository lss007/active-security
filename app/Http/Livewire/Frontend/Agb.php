<?php

namespace App\Http\Livewire\Frontend;

use App\Models\Agbpage;
use Livewire\Component;

class Agb extends Component
{
    public  $fetchAgbtext;
    public function render()
    {
      $this->fetchAgbtext =  Agbpage::where('status' ,1 )->get();
        return view('livewire.frontend.agb')->layout('layouts.frontend');
    }
}
