<?php

namespace App\Http\Livewire\Backend\Pages\Home\Sections;

use Livewire\Component;
use App\Models\HomeSectionTwo;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;
class EditHomeSection2 extends Component
{
    use WithFileUploads;
    public $postId, $heading ,$title ,$para1 ,$para2 ,$Image ,$buttonName ,$buttonLink;
    public $newImg ,$editHomeSecImg2;

        protected $listeners = ['editHomeSecImg2'];
        public function editHomeSecImg2($val){   
                $this->editHomeSecImg2 = $val;
            
            }
    public function mount($id){
        $this->postId = $id;
if($this->postId){
        $this->editHomeSec2 = HomeSectionTwo::where('id', $this->postId)->first();
        $this->heading  =  $this->editHomeSec2->heading;
        $this->title =  $this->editHomeSec2->title;
        $this->para1 =  $this->editHomeSec2->para1; 
        $this->para2 = $this->editHomeSec2->para2;
        $this->Image = $this->editHomeSec2->image;
        $this->buttonName = $this->editHomeSec2->button_name;
        $this->buttonLink = $this->editHomeSec2->button_link;
}
        $getSection1  = HomeSectionTwo::where('id', $this->postId)->where('status',Null)->exists();
        if($getSection1)
        {
            $notification = array(
                'message' => 'Access denied ',
                'alert-type' => 'error'
            );
             return redirect()->route('viewHomeSection2')->with( $notification);
         }
    }

    public function render()
    {
        return view('livewire.backend.pages.home.sections.edit-home-section2')->layout('layouts.backend');
    }

    protected $rules = [
        'heading' => 'required|string',
        'title' => 'required|string',
        'para1' => 'required ',
        'para2' => 'required',
        // 'buttonName' => 'required',
        // 'buttonLink' => 'required',
    ];
    protected $messages = [
        'para1.required' => 'The paragraph  field is required.',
        'para2.required' => 'The paragraph  field is required.',
    ];  
   private function resetInputFields(){
        $this->heading = '';
        $this->title = '';
        $this->para1 = '';
        $this->para2 = '';
        $this->buttonName = '';
        $this->buttonLink = '';
    }
        public function updateHomeSection2(){
            // dd($this->all());
            $this->validate();
            if($this->editHomeSecImg2)  
            {
            // ===========  working ans stora at storage path   =========== 
                    // $folderPath = public_path('upload/');
                    $folderPath = Storage::path('public/Home-section/');
                    // dd($folderPath);
                    $image_parts = explode(";base64,", $this->editHomeSecImg2);
                    $image_type_aux = explode("image/", $image_parts[0]);
                    $image_type = $image_type_aux[1];
                    $image_base64 = base64_decode($image_parts[1]);
                    $imageName = time().'_edit' . '.png';
                    $imageFullPath = $folderPath.$imageName;
                    file_put_contents($imageFullPath, $image_base64);                
            // ===========  working ans stora at storage path   =========== 
                HomeSectionTwo::where('id', $this->postId)->update([
            
                    'image' =>   $imageName  ?? Null,
                  ]);

                    $notification = array(
                        'message' => 'Home Section 2 updated',
                        'alert-type' => 'info'
                    );
                return redirect()->route('viewHomeSection2')->with($notification);
            }else {
                HomeSectionTwo::where('id', $this->postId)->update([
                    'heading' =>    $this->heading,
                    'title' =>    $this->title,
                    'para1' =>    $this->para1,
                    'para2' =>     $this->para2 ,
                    'button_name' =>    trim($this->buttonName),
                    'button_link' =>  trim( $this->buttonLink),
                
                  ]);

                        $notification = array(
                            'message' => 'Home Section 2 updated',
                            'alert-type' => 'success'
                        );
                return redirect()->route('viewHomeSection2')->with($notification);
         }
    }
}
