<?php

namespace App\Http\Livewire\Backend\Pages\Home\Sections;

use App\Models\HomeSectionTwo;
use Livewire\Component;

class ViewHomeSection2 extends Component
{
    public $homeSectionTwo;

    public function render()
    {
        $this->homeSectionTwo = HomeSectionTwo::latest()->first();

        return view('livewire.backend.pages.home.sections.view-home-section2')->layout('layouts.backend');
    }
}
