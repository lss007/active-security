<?php

namespace App\Http\Livewire\Backend;

use App\Models\Contact;
use Carbon\Carbon;
use Livewire\Component;

class Dashboard extends Component
{
    public $getContacts ,$thisweek ,$thismonth ,$thisyear;
    public function render()
    {
        $this->getContacts =   Contact::limit(10)->get();

      $this->thisweek = Contact::select("*")->whereBetween('created_at',  [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek(),] )->get();
      
      $this->thismonth =   Contact::select('*')->whereMonth('created_at', Carbon::now()->month)->get();

      $this->thisyear  =  Contact::whereBetween('created_at', [ Carbon::now()->startOfYear(),Carbon::now()->endOfYear(),])->get();
        return view('livewire.backend.dashboard')->layout('layouts.backend');
    }
}
