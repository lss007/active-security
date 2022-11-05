<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;

class VeranstaltungsSchutz extends Component
{
    public function render()
    {
        return view('livewire.frontend.veranstaltungs-schutz')->layout('layouts.frontend');
    }
}
