<?php

namespace App\Http\Livewire\Frontend;

use App\Models\PrivacyPageText;
use Livewire\Component;

class Datenschutz extends Component
{
    public $getPrivacydata;
    public function render()
    {
         $this->getPrivacydata = PrivacyPageText::where('status',1)->get();
        return view('livewire.frontend.datenschutz')->layout('layouts.frontend');
    }
}
