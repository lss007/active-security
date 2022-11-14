<?php

namespace App\Http\Livewire\Frontend;

use App\Models\AllPagesBanner;
use Livewire\Component;

class ObjektUndWerkschutz extends Component
{
    public $ObjektUndPageBanner ;
    public function render()
    {
       $this->ObjektUndPageBanner = AllPagesBanner::where('cat_id' ,1)->where('status',1)->latest()->first();
        return view('livewire.frontend.objekt-und-werkschutz')->layout('layouts.frontend');;
    }
}
