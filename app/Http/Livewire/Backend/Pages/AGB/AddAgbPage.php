<?php

namespace App\Http\Livewire\Backend\Pages\Agb;

use App\Models\Agbpage;
use Livewire\Component;

class AddAgbPage extends Component
{
    public $heading,$para1,$para2,$para3,$para4,$para5 ;

    public function render()
    {
        return view('livewire.backend.pages.agb.add-agb-page')->layout('layouts.backend');
    }

    protected $rules = [
        'heading' => 'required',
        'para1' => 'required',
    ];
   private function resetInputFields(){
            $this->heading   ='';
            $this->para1  ='';
            $this->para2  ='';
            $this->para3  ='';
            $this->para4  ='';
            $this->para5  ='';
        }
    protected $messages = [
        'para1.required' => 'The paragraph field is required.',
       
    ]; 

    public function storeagbText(){
        $this->validate();
             Agbpage::create([
            'heading' =>    $this->heading,
            'para1' =>      $this->para1,
            'para2' =>     $this->para2,
            'para3' =>      $this->para3,
            'para4' =>      $this->para4,
            'para5' =>      $this->para5,

            ]);
             $notification = array(
                'message' => 'Agb Page Text Published',
                'alert-type' => 'success'
                );
return redirect()->route('agb_page_View')->with($notification);
    }
}
