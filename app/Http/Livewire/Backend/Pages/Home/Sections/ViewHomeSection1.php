<?php

namespace App\Http\Livewire\Backend\Pages\Home\Sections;

use App\Models\HomeSectionOne;
use Livewire\Component;

class ViewHomeSection1 extends Component
{
    public $homeSectionOne;
    public function render()
    {
        $this->homeSectionOne = HomeSectionOne::first();
        return view('livewire.backend.pages.home.sections.view-home-section1')->layout('layouts.backend');
    }
}
