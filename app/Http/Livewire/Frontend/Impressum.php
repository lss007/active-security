<?php

namespace App\Http\Livewire\Frontend;

use App\Models\AllPagesBanner;
use App\Models\FooterContactAddress;
use App\Models\ServicesPageBanner;
use Livewire\Component;

class Impressum extends Component
{
    public $getAddress ,$impressum_pagebanner;
    public function render()
    {
        $this->getAddress = FooterContactAddress::first();
        $this->impressum_pagebanner = AllPagesBanner::where('cat_id' ,13)->where('status',1)->first();

        return view('livewire.frontend.impressum')->layout('layouts.frontend');
    }
}
