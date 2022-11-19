<?php

namespace App\Http\Livewire\Backend\Pages\Contacts;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\ContactSection;
class EditContactSection extends Component
{
    use WithFileUploads;

    public $contactPostId, $editSection,$heading ,$title,$para1,$image;
    public $newimage;
    public function render()
    {
        return view('livewire.backend.pages.contacts.edit-contact-section')->layout('layouts.backend');
    }

   
    public function mount($id){
        $this->contactPostId = $id;

        $this->editSection= ContactSection::where('id', $this->contactPostId)->first();
        $this->heading  =  $this->editSection->heading;
        $this->title =  $this->editSection->title;
        $this->para1 =  $this->editSection->para1; 
        $this->Image = $this->editSection->image;

    }


    protected $rules = [

        'newimage' =>  'required|image|mimes:jpg,png,jpeg,svg,webp|max:1040', 

    ];
   private function resetInputFields(){
            $this->heading   ='';
            $this->title  ='';
            $this->para1  ='';
            $this->image = '';
        }
    protected $messages = [
        'para1.required' => 'The paragraph field is required.',

    ];  


    public function updateContactsection(){
        $this->validate();
        if($this->newimage)  {
            $fileName = time().'_'.$this->newimage->getClientOriginalName();
            $filePath = $this->newimage->storeAs('Contact', $fileName, 'public');
                ContactSection::where('id' , $this->contactPostId)->update([
                    'image' => $fileName ,
                    ]);
                $notification = array(
                    'message' => 'Contact Image Published',
                    'alert-type' => 'info'
                );
                return redirect()->route('Manage_Contacts_section')->with($notification);
         }
        else 
        {
                 ContactSection::where('id' , $this->contactPostId)->update([
                    'heading' =>    $this->heading,
                    'title' =>      $this->title,
                    'para1' =>      $this->para1,
                    ]);
                $notification = array(
                    'message' => 'Contact Section Published',
                    'alert-type' => 'success'
                );
                return redirect()->route('Manage_Contacts_section')->with($notification);
            }
    }
}
