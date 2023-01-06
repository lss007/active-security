<?php

namespace App\Http\Livewire\Frontend;

use App\Models\AllPagesBanner;
use App\Models\ServicesPageBanner;
use App\Models\ServicesPageSection;
use Livewire\Component;

class Empfangsdienst extends Component
{
    public $Empfanmain, $EmpfanPagesection, $Empfan_pagebanner;
    public function mount(){
        $this->Empfanmain = AllPagesBanner::where('cat_id' ,7)->where('status',1)->first();
        $this->EmpfanPagesection  = ServicesPageSection::where('page_cat_id', 7)->where('status',1)->first();
        $this->Empfan_pagebanner = ServicesPageBanner::where('page_cat_id', 7)->where('status',1)->first();
    }
    public function render()
    {

        
        return view('livewire.frontend.empfangsdienst')->layout('layouts.frontend');
    }
}
