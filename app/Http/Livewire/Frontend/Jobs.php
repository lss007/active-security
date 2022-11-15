<?php

namespace App\Http\Livewire\Frontend;

use App\Models\AllPagesBanner;
use App\Models\JobSection;
use App\Models\ServicesPageBanner;
use Livewire\Component;

class Jobs extends Component
{

    public $Jobsmain ,$Jobs_pagebanner  ,$getJobsec ;
    public function render()
    {
        $this->Jobsmain     = AllPagesBanner::where('cat_id' ,11)->where('status',1)->first();
        $this->Jobs_pagebanner  = ServicesPageBanner::where('page_cat_id', 11)->where('status',1)->first();
        $this->getJobsec =  JobSection::first();
        return view('livewire.frontend.jobs')->layout('layouts.frontend');
    }
}
