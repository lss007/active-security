<?php

namespace App\Http\Livewire\Frontend;

use App\Models\CompanySectionOne;
use App\Models\companySectionTwo;
use Livewire\Component;

class Unternehmen extends Component
{
    public $companysecOne, $companysecTwo ,$companysecThree;
    public function render()
    {

        $this->companysecOne =    CompanySectionOne::where('status' ,1)->first();

        $this->companysecTwo =    companySectionTwo::where('status' ,1)->where('section_id' ,2)->first();

        $this->companysecThree =    companySectionTwo::where('status' ,1)->where('section_id' ,3)->first();

        

        return view('livewire.frontend.unternehmen')->layout('layouts.frontend');
    }
}
