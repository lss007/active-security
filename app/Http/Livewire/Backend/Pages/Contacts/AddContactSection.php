<?php

namespace App\Http\Livewire\Backend\Pages\Contacts;

use App\Models\ContactSection;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddContactSection extends Component
{
    use WithFileUploads;

public $heading ,$title,$para1,$image;

    public function render()
    {
        return view('livewire.backend.pages.contacts.add-contact-section')->layout('layouts.backend');
    }
    protected $rules = [

        'image' =>  'required|image|mimes:jpg,png,jpeg,svg,webp|max:1040', 

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
    public function saveContactSection(){
        $this->validate();
        if($this->image)  {
            $fileName = time().'_'.$this->image->getClientOriginalName();
            $filePath = $this->image->storeAs('Contact', $fileName, 'public');
            }
                ContactSection::create([
                 
                        'heading' =>    $this->heading,
                        'title' =>      $this->title,
                        'para1' =>      $this->para1,
                        'image' => $fileName ,
                        ]);
                $notification = array(
                    'message' => 'Contact Section Published',
                    'alert-type' => 'success'
                );
                return redirect()->route('Manage_Contacts_section')->with($notification);
    }
}
