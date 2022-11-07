<?php

namespace App\Http\Livewire\Backend\Pages\Footer;

use App\Models\FooterContactAddress;
use Livewire\Component;

class FooterAddress extends Component
{
    public $contactAddress;
    public function render()
    {
      $this->contactAddress =  FooterContactAddress::first();
     
        return view('livewire.backend.pages.footer.footer-address')->layout('layouts.backend');
    }
}
