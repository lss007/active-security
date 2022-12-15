<?php

namespace App\Http\Livewire\Frontend;

use App\Models\Agbpage;
use App\Models\AllPagesBanner;
use Livewire\Component;

class Agb extends Component
{
    public  $fetchAgbtext ,$agb_pagebanner;
    public function render()
    {
      $this->fetchAgbtext =  Agbpage::where('status' ,1 )->get();
      $this->agb_pagebanner = AllPagesBanner::where('cat_id' ,15)->where('status',1)->first();

        return view('livewire.frontend.agb')->layout('layouts.frontend');
    }
} 
