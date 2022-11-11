<?php

namespace App\Http\Livewire\Backend\Pages\Company;

use App\Models\companySectionTwo;
use Livewire\Component;
use Livewire\WithFileUploads;
class AddSectionTwo extends Component
{
use WithFileUploads;
    public  $section_id ,$name  ,$email  ,$position  ,$department  ,$profile_img  ,$heading  ,$title  ,$para1 ,$para2  ,$para3  ,$para4;
    public function render()
    {
        return view('livewire.backend.pages.company.add-section-two')->layout('layouts.backend');
    }

    protected $rules = [
        'section_id'  => 'required',
        'name' => 'required',
        'email' => 'required|email',
        'position' => 'required',
        'department' => 'required',
        'heading' => 'required',
        'title' => 'required',
        'para1' => 'required',
        'para2' => 'required',
        'profile_img' =>  'required|image|mimes:jpg,png,jpeg,svg,webp|max:1040', 

    ];
   private function resetInputFields(){
            $this->section_id   = '';
            $this->name   = '';
            $this->email  = '';
            $this->position  = '';
            $this->department  = '';
            $this->heading   ='';
            $this->title  ='';
            $this->para1  ='';
            $this->para2  ='';
            $this->profile_img = '';
  
        }
    protected $messages = [
        'section_id.required' => 'The Section  field is required.',
        'para1.required' => 'The paragraph field is required.',
        'para2.required' => 'The paragraph field is required.',
        'profile_img.required' => 'The profile image field is required.',


    ];  
    public function saveCompanysection2(){
     
        $this->validate();
        if($this->profile_img)  {
           
            $fileName = time().'_'.$this->profile_img->getClientOriginalName();
            $filePath = $this->profile_img->storeAs('company-profile', $fileName, 'public');
    }

        companySectionTwo::create([
            'section_id'  =>      $this->section_id,
            'name'  =>      $this->name,
            'email' =>      $this->email,
            'position' =>   $this->position,
            'department' => $this->department,
            'heading' =>    $this->heading,
            'title' =>      $this->title,
            'para1' =>      $this->para1,
            'para2' =>      $this->para2,
            'para3' =>      $this->para3,
            'profile_img' => $fileName ,
             ]);

    $notification = array(
        'message' => 'Company Section Published',
        'alert-type' => 'success'
    );
    return redirect()->route('viewCompanySections2')->with($notification);
    }
}
