<?php

namespace App\Http\Livewire\Backend\Pages\Home\Sections;

use App\Models\HomeSectionFive;
use Livewire\Component;

class ViewHomeSection5 extends Component
{
    public $homeSectionfive ;
    public function render()
    {
        
        $this->homeSectionfive = HomeSectionFive::first();

        return view('livewire.backend.pages.home.sections.view-home-section5')->layout('layouts.backend');
    }
}
