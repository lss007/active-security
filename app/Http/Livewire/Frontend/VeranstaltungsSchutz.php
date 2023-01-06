<?php

namespace App\Http\Livewire\Frontend;

use App\Models\AllPagesBanner;
use App\Models\ServicesPageBanner;
use App\Models\ServicesPageSection;
use Livewire\Component;

class VeranstaltungsSchutz extends Component
{
    public $veranstmain ,$veranstPagesection ,$veranstpagebanner;


    public function mount(){
        $this->veranstmain  = AllPagesBanner::where('cat_id' ,9)->where('status',1)->first();
        $this->veranstPagesection  = ServicesPageSection::where('page_cat_id', 9)->where('status',1)->first();
        $this->veranstpagebanner  = ServicesPageBanner::where('page_cat_id', 9)->where('status',1)->first();
    }
    public function render()
    {
      
        return view('livewire.frontend.veranstaltungs-schutz')->layout('layouts.frontend');
    }
}
