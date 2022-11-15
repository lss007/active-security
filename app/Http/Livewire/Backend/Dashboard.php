<?php

namespace App\Http\Livewire\Backend;

use App\Models\Contact;
use Livewire\Component;

class Dashboard extends Component
{
    public $getContacts;
    public function render()
    {
        $this->getContacts =   Contact::limit(10)->get();
        return view('livewire.backend.dashboard')->layout('layouts.backend');
    }
}
