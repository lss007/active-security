<?php

namespace App\Http\Livewire\Frontend;

use App\Models\JobSection;
use Livewire\Component;

class Jobs extends Component
{
    public function render()
    {
        $this->getJobsec =  JobSection::latest()->first();
        return view('livewire.frontend.jobs')->layout('layouts.frontend');
    }
}
