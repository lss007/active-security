<?php

namespace App\Http\Livewire\Frontend;

use App\Models\HomeBanner;
use App\Models\HomeSectionFive;
use App\Models\HomeSectionOne;
use App\Models\HomeSectionSlider;
use App\Models\HomeSectionTwo;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class HomePage extends Component
{
    public $homeBanner ,$active_secuirty ,$HomeSectiontwo ,$HomeSliders ,$HomeSecFive;
    public function userlogout(){
        Auth::logout();
        
        }
    public function render()
    {
       $this->homeBanner =       HomeBanner::where('status',1)->latest()->first();
       $this->active_secuirty  = HomeSectionOne::where('status',1)->latest()->first();
       $this->HomeSectiontwo =  HomeSectionTwo::where('status',1)->latest()->first();
       $this->HomeSliders =      HomeSectionSlider::where('status',1)->latest()->get();
        $this->HomeSecFive =    HomeSectionFive::where('status',1)->latest()->first();

        return view('livewire.frontend.home-page')->layout('layouts.frontend');
    }
}
