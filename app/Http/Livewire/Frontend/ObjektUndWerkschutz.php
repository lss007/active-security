<?php

namespace App\Http\Livewire\Frontend;

use App\Models\AllPagesBanner;
use App\Models\ServicesPageBanner;
use App\Models\ServicesPageSection;
use Livewire\Component;

class ObjektUndWerkschutz extends Component
{
    public $ObjektUndPageBanner ,$ObjektUndPagesection ,$Services_pagebanner; 
    public function render()
    {
       $this->ObjektUndPageBanner = AllPagesBanner::where('cat_id' ,1)->where('status',1)->first();
       $this->ObjektUndPagesection  = ServicesPageSection::where('page_cat_id' ,1)->where('status',1)->first();
       $this->Services_pagebanner = ServicesPageBanner::where('page_cat_id' ,1)->where('status',1)->first();
       return view('livewire.frontend.objekt-und-werkschutz')->layout('layouts.frontend');;
    }
}
