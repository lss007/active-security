<?php

namespace App\Http\Livewire\Frontend;

use App\Models\Agbpage;
use App\Models\AllPagesBanner;
use App\Models\Navbar;
use Livewire\Component;

class Agb extends Component
{
    public  $fetchAgbtext ,$agb_pagebanner ,$active;


    public function mount(){
      $this->active = Navbar::where('route_link' ,15)->first();
        if( $this->active->status == 1){
         
        }else {
          $notification = array(
            'message' => 'This page not Active',
            'alert-type' => 'error'
        );
          return redirect('/')->with($notification );
        }
    }
    public function render()
    {

      $this->fetchAgbtext =  Agbpage::where('status' ,1 )->get();
    
      // dd(  $this->active);

      $this->agb_pagebanner = AllPagesBanner::where('cat_id' ,15)->where('status',1)->first();

      return view('livewire.frontend.agb')->layout('layouts.frontend');



    }
} 
