<?php

namespace App\Http\Livewire\Backend\Pages\Privacy;

use App\Models\PrivacyPageText;
use Livewire\Component;

class AddFooterPrivacy extends Component
{

    public $heading ,$title ,$para1 ,$para2 ,$para3 ,$para4;
    public function render()
    {
        return view('livewire.backend.pages.privacy.add-footer-privacy')->layout('layouts.backend');
    }
    protected $rules = [
        'heading' => 'required',
        'para1' => 'required',
    ];
   private function resetInputFields(){
            $this->heading   ='';
            $this->title  ='';
            $this->para1  ='';
            $this->para2  ='';
            $this->para3  ='';
            $this->para4  ='';

        }
    protected $messages = [
        'para1.required' => 'The paragraph field is required.',
       
    ]; 
    public function storePrivacyText(){

            // dd($this->para1);
        $this->validate();
        PrivacyPageText::create([
            'heading' =>    $this->heading,
            'title' =>      $this->title,
            'para1' =>      $this->para1,
            'para2' =>     $this->para2,
            'para3' =>      $this->para3,
            'para4' =>      $this->para4,
            ]);
             $notification = array(
                'message' => 'Job Section Published',
                'alert-type' => 'success'
                );
return redirect()->route('footer_Privacy_pageView')->with($notification);
    }
}
