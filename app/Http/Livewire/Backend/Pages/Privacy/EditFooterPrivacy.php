<?php

namespace App\Http\Livewire\Backend\Pages\Privacy;

use App\Models\PrivacyPageText;
use Livewire\Component;

class EditFooterPrivacy extends Component
{

    public $editId, $heading ,$title ,$para1 ,$para2 ,$para3 ,$para4;

    public function render()
    {
        return view('livewire.backend.pages.privacy.edit-footer-privacy')->layout('layouts.backend');
    }


    public function mount($id){
        $this->editId = $id;

        $this->editjob= PrivacyPageText::where('id', $this->editId)->first();
        $this->heading  =  $this->editjob->heading;
        $this->title =  $this->editjob->title;
        $this->para1 =  $this->editjob->para1; 
        $this->para2 = $this->editjob->para2;
        $this->para3 = $this->editjob->para3;
        $this->para4 = $this->editjob->para3;

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
    public function updatePrivacyText(){



        $this->validate();
        PrivacyPageText::where('id' ,$this->editId)->update([
            'heading' =>    $this->heading,
            'title' =>      $this->title,
            'para1' =>      $this->para1,
            'para2' =>     $this->para2,
            'para3' =>      $this->para3,
            'para4' =>      $this->para4,
            ]);
             $notification = array(
                'message' => 'Job Section updated',
                'alert-type' => 'info'
                );
return redirect()->route('footer_Privacy_pageView')->with($notification);
    }
}
