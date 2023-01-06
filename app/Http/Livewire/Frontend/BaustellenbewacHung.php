<?php

namespace App\Http\Livewire\Frontend;

use App\Models\AllPagesBanner;
use App\Models\ServicesPageBanner;
use App\Models\ServicesPageSection;
use Livewire\Component;

class BaustellenbewacHung extends Component
{
    public $Baustellmain ,$BaustellPagesection , $Baustell_pagebanner ;
    public function mount(){
        $this->Baustellmain = AllPagesBanner::where('cat_id' ,4)->where('status',1)->first();
        $this->BaustellPagesection  = ServicesPageSection::where('page_cat_id', 4)->where('status',1)->first();
        $this->Baustell_pagebanner = ServicesPageBanner::where('page_cat_id', 4)->where('status',1)->first();
    }
    public function render()
    {

        return view('livewire.frontend.baustellenbewac-hung')->layout('layouts.frontend');
    }
}
