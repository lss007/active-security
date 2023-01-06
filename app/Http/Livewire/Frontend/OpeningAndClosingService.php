<?php

namespace App\Http\Livewire\Frontend;

use App\Models\AllPagesBanner;
use App\Models\ServicesPageBanner;
use App\Models\ServicesPageSection;
use Livewire\Component;

class OpeningAndClosingService extends Component
{
    public $Openingmain  ,$OpeningPagesection  ,$Opening_pagebanner;
    public function mount(){
        $this->Openingmain = AllPagesBanner::where('cat_id' ,5)->where('status',1)->first();
        $this->OpeningPagesection  = ServicesPageSection::where('page_cat_id', 5)->where('status',1)->first();
        $this->Opening_pagebanner = ServicesPageBanner::where('page_cat_id', 5)->where('status',1)->first();
    }
    public function render()
    {

        return view('livewire.frontend.opening-and-closing-service')->layout('layouts.frontend');
    }
}
