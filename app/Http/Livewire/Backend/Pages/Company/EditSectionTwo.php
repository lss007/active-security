<?php

namespace App\Http\Livewire\Backend\Pages\Company;

use App\Models\companySectionTwo;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditSectionTwo extends Component
{
    use WithFileUploads;
    public  $editsections, $post_id,$section_id ,$name  ,$email  ,$position  ,$department  ,$profile_img  ,$heading  ,$title  ,$para1 ,$para2  ,$para3  ,$para4;
public $newprofile ;
    public function render()
    {
        return view('livewire.backend.pages.company.edit-section-two')->layout('layouts.backend');
    }

    public function mount($id){
        $this->post_id = $id;
        $this->editsections = companySectionTwo::where('id', $this->post_id)->first();
        $this->section_id  =  $this->editsections->section_id;
        $this->name  =  $this->editsections->name;
        $this->email  =  $this->editsections->email;
        $this->position  =  $this->editsections->position;
        $this->department  =  $this->editsections->department;
        $this->heading  =  $this->editsections->heading;
        $this->title =  $this->editsections->title;
        $this->para1 =  $this->editsections->para1; 
        $this->para2 = $this->editsections->para2;


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
        'newprofile' =>  'required|image|mimes:jpg,png,jpeg,svg,webp|max:1040', 

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
        
            $this->newprofile = '';
  
        }
    protected $messages = [
        'section_id.required' => 'The Section  field is required.',
        'para1.required' => 'The paragraph field is required.',
        'para2.required' => 'The paragraph field is required.',
    ];  



    public function updatesections(){
        $this->validate();

        if($this->newprofile)  {
           
            $fileName = time().'_'.$this->newprofile->getClientOriginalName();
            $filePath = $this->newprofile->storeAs('company-profile', $fileName, 'public');
            companySectionTwo::where('id', $this->post_id)->update([
                'profile_img' => $fileName ,
                 ]);
    
        $notification = array(
            'message' => 'Company Section updated',
            'alert-type' => 'success'
        );
        return redirect()->route('viewCompanySections2')->with($notification);
    }else {
        companySectionTwo::where('id', $this->post_id)->update([
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
             ]);

    $notification = array(
        'message' => 'Company Section updated',
        'alert-type' => 'success'
    );
    return redirect()->route('viewCompanySections2')->with($notification);
    }
      
    }
}
