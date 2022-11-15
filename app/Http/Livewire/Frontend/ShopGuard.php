<?php

namespace App\Http\Livewire\Frontend;

use App\Models\AllPagesBanner;
use App\Models\ServicesPageBanner;
use App\Models\ServicesPageSection;
use Livewire\Component;

class ShopGuard extends Component
{
    public $Shopmain ,$ShopPagesection ,$Shop_pagebanner ;
    public function render()
    {
        $this->Shopmain         = AllPagesBanner::where('cat_id' ,8)->where('status',1)->first();
        $this->ShopPagesection  = ServicesPageSection::where('page_cat_id', 8)->where('status',1)->first();
        $this->Shop_pagebanner  = ServicesPageBanner::where('page_cat_id', 8)->where('status',1)->first();
        
        return view('livewire.frontend.shop-guard')->layout('layouts.frontend');
    }
}
