<?php

namespace App\Http\Livewire\Frontend;

use App\Models\AllPagesBanner;
use App\Models\CompanySectionOne;
use App\Models\companySectionTwo;
use App\Models\ServicesPageBanner;
use Livewire\Component;

class Unternehmen extends Component
{
    public $companysecOne, $companysecTwo ,$companysecThree ,$Unternehmenmain ,$Unternehmen_pagebanner;
    public function render()
    {
        $this->Unternehmenmain     = AllPagesBanner::where('cat_id' ,10)->where('status',1)->first();
        $this->Unternehmen_pagebanner  = ServicesPageBanner::where('page_cat_id', 10)->where('status',1)->first();

        $this->companysecOne =    CompanySectionOne::where('status' ,1)->first();

        $this->companysecTwo =    companySectionTwo::where('status' ,1)->where('section_id' ,2)->first();

        $this->companysecThree =    companySectionTwo::where('status' ,1)->where('section_id' ,3)->first();

        

        return view('livewire.frontend.unternehmen')->layout('layouts.frontend');
    }
}
