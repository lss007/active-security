<?php

namespace App\Http\Livewire\Backend\Pages\Job;

use App\Models\JobSection;
use Livewire\Component;
use Livewire\WithFileUploads;
class AddJobSection extends Component
{
    use WithFileUploads;
    public $heading  ,$title  ,$para1 ,$title2 , $para2 ,$image ,$button_name;


    public function mount()
    {
     $getjobSection1  = JobSection::exists();
     if($getjobSection1)
     {
         $notification = array(
             'message' => 'Section already exists',
             'alert-type' => 'warning'
         );
          return redirect()->route('view_job_section')->with( $notification);
      }
    }
    public function render()
    {
        return view('livewire.backend.pages.job.add-job-section')->layout('layouts.backend');
    }


    protected $rules = [
   
        'heading' => 'required',
        'title' => 'required',
        'para1' => 'required',
        'title2' => 'required',
        'para2' => 'required',
        'image' =>  'required|image|mimes:jpg,png,jpeg,svg,webp|max:1040', 

    ];
   private function resetInputFields(){
    
            $this->heading   ='';
            $this->title  ='';
            $this->para1  ='';
            $this->title2  ='';
            $this->para2  ='';
            $this->image = '';
  
        }
    protected $messages = [
        'section_id.required' => 'The Section  field is required.',
        'para1.required' => 'The paragraph field is required.',
        'para2.required' => 'The paragraph field is required.',
        'image.required' => 'The profile image field is required.',


    ];  
    public function storejobsection(){
        $this->validate();

        if($this->image)  {
           
            $fileName = time().'_'.$this->image->getClientOriginalName();
            $filePath = $this->image->storeAs('job', $fileName, 'public');
    }

                JobSection::create([
                 
                        'heading' =>    $this->heading,
                        'title' =>      $this->title,
                        'para1' =>      $this->para1,
                        'title2' =>      $this->title2,
                        'para2' =>      $this->para2,
                        'button_name' =>      $this->button_name,
                        'image' => $fileName ,
                        ]);

                $notification = array(
                    'message' => 'Job Section Published',
                    'alert-type' => 'success'
                );
    return redirect()->route('view_job_section')->with($notification);
    }
}
