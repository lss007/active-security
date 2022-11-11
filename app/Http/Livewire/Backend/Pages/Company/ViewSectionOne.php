<?php

namespace App\Http\Livewire\Backend\Pages\Company;

use App\Models\CompanySectionOne;
use Livewire\Component;

class ViewSectionOne extends Component
{
    public $getCompanySection1;
    public function render()
    {
                $this->getCompanySection1  = CompanySectionOne::latest()->first();
        return view('livewire.backend.pages.company.view-section-one')->layout('layouts.backend');
    }
}
