<?php

namespace App\Http\Livewire\Frontend;

use App\Models\AllPagesBanner;
use App\Models\ServicesPageBanner;
use App\Models\ServicesPageSection;
use Livewire\Component;

class Centerbewachung extends Component
{
    public $centerbewachung ,$centerPagesection ,$center_pagebanner;
    public function mount(){
        $this->centerbewachung = AllPagesBanner::where('cat_id' ,2)->where('status',1)->first();
        $this->centerPagesection  = ServicesPageSection::where('page_cat_id', 2)->where('status',1)->first();
        $this->center_pagebanner = ServicesPageBanner::where('page_cat_id', 2)->where('status',1)->first();
    }
    public function render()
    {
 
        return view('livewire.frontend.centerbewachung')->layout('layouts.frontend');
    }
}
