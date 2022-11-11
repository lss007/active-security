<?php

namespace App\Http\Livewire\Backend\Pages\Job;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\JobSection;
class EditJobSection extends Component
{
    use WithFileUploads;
    public $heading  ,$title  ,$para1 ,$title2 , $para2 ,$image ,$button_name; 
    public $newimage;
    public function mount($id){
        $this->postId = $id;

        $this->editjob= JobSection::where('id', $this->postId)->first();
        $this->heading  =  $this->editjob->heading;
        $this->title =  $this->editjob->title;
        $this->para1 =  $this->editjob->para1; 
        $this->title2 =  $this->editjob->title2;

        $this->para2 = $this->editjob->para2;
        $this->Image = $this->editjob->image;
        $this->button_name = $this->editjob->button_name;




    }

    public function render()
    {
        return view('livewire.backend.pages.job.edit-job-section')->layout('layouts.backend');
    }
        protected $rules = [
            'heading' => 'required',
            'title' => 'required',
            'para1' => 'required',
            'title2' => 'required',
            'para2' => 'required',
            // 'newimage' =>  'required|image|mimes:jpg,png,jpeg,svg,webp|max:1040', 
    
        ];
       private function resetInputFields(){
                $this->heading   ='';
                $this->title  ='';
                $this->para1  ='';
                $this->title2  ='';
                $this->para2  ='';
                $this->newimage = '';
      
            }
        protected $messages = [
       
            'para1.required' => 'The paragraph field is required.',
            'para2.required' => 'The paragraph field is required.',

        ];  

        public function updatejobsection(){
            if($this->newimage)  {
                $this->validate([
                    'newimage' =>  'required|image|mimes:jpg,png,jpeg,svg,webp|max:2040',
                ]);
                $fileName = time().'_'.$this->newimage->getClientOriginalName();
                $filePath = $this->newimage->storeAs('job', $fileName, 'public');
                JobSection::where('id',$this->postId)->update([
                
                    'image' => $fileName ,
                ]);
                $notification = array(
                    'message' => 'Job Section updated',
                    'alert-type' => 'info'
                );
                 return redirect()->route('view_job_section')->with($notification);
                 }
                 else {
                    JobSection::where('id',$this->postId)->update([
                        'heading' =>    $this->heading,
                        'title' =>      $this->title,
                        'para1' =>      $this->para1,
                        'title2' =>      $this->title2,
                        'para2' =>      $this->para2,
                        'button_name' =>      $this->button_name,
                      
                    ]);
                    $notification = array(
                        'message' => 'Job Section updated',
                        'alert-type' => 'success'
                    );
                     return redirect()->route('view_job_section')->with($notification);
                 }

             
            }
}
