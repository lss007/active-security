<?php

namespace App\Http\Livewire\Frontend;

use App\Models\AllPagesBanner;
use App\Models\ServicesPageBanner;
use App\Models\ServicesPageSection;
use Livewire\Component;

class RevierFahrten extends Component
{
    public    $Reviermain  ,$RevierPagesection  ,$Revier_pagebanner;
    public function mount(){
        $this->Reviermain = AllPagesBanner::where('cat_id' ,6)->where('status',1)->first();
        $this->RevierPagesection  = ServicesPageSection::where('page_cat_id', 6)->where('status',1)->first();
        $this->Revier_pagebanner = ServicesPageBanner::where('page_cat_id', 6)->where('status',1)->first();
        
    }
    public function render()
    {

     
        return view('livewire.frontend.revier-fahrten')->layout('layouts.frontend');
    }
}
