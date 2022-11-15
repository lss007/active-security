<?php

namespace App\Http\Livewire\Frontend;

use App\Models\AllPagesBanner;
use App\Models\ServicesPageBanner;
use App\Models\ServicesPageSection;
use Livewire\Component;

class Kaufhausdetektive extends Component
{
    public $Kaufhausmain, $KaufhausPagesection ,  $Kaufhaus_pagebanner;
    public function render()
    {
        $this->Kaufhausmain = AllPagesBanner::where('cat_id' ,3)->where('status',1)->first();
        $this->KaufhausPagesection  = ServicesPageSection::where('page_cat_id', 3)->where('status',1)->first();
        $this->Kaufhaus_pagebanner = ServicesPageBanner::where('page_cat_id', 3)->where('status',1)->first();
        return view('livewire.frontend.kaufhausdetektive')->layout('layouts.frontend');
    }
}
