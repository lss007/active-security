<?php

namespace App\Http\Livewire\Frontend;

use App\Models\AllPagesBanner;
use App\Models\PrivacyPageText;
use Livewire\Component;

class Datenschutz extends Component
{
    public $getPrivacydata ,$datenschutz_pagebanner;

    public function mount(){
        $this->getPrivacydata = PrivacyPageText::where('status',1)->get();
        $this->datenschutz_pagebanner = AllPagesBanner::where('cat_id' ,14)->where('status',1)->first();
    }
    
    public function render()
    {
 
        return view('livewire.frontend.datenschutz')->layout('layouts.frontend');
    }
}
