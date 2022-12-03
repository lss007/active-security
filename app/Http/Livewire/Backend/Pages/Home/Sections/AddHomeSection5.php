<?php

namespace App\Http\Livewire\Backend\Pages\Home\Sections;

use App\Models\HomeSectionFive;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddHomeSection5 extends Component
{
    use WithFileUploads;
    public $heading ,$title ,$para1 ,$para2 ,$Image ,$buttonName ,$buttonLink;

        public $getHomeImg5;
    

    protected $listeners = ['getSectionImg5'];
        
    public function getSectionImg5($val){   

               $this->getHomeImg5 = $val;
         
           }

    public function mount()
    {
     $getSection5  = HomeSectionFive::where('status',1)->exists();
     if($getSection5)
     {
         $notification = array(
             'message' => 'Section already exists',
             'alert-type' => 'warning'
         );
          return redirect()->route('ViewHomeSection5')->with( $notification);
      }
    }

    public function render()
    {
        return view('livewire.backend.pages.home.sections.add-home-section5')->layout('layouts.backend');
    }

    protected $rules = [
        'heading' => 'required|string',
        'title' => 'required|string',
        'para1' => 'required ',
        'para2' => 'required',
        'getHomeImg5' => 'required', 
        'buttonName' => 'required',
        // 'buttonLink' => 'required',
        
    ];
    protected $messages = [
        'getHomeImg5.required' => 'The Image field is required.',
        
        'para1.required' => 'The paragraph field is required.',
        'para2.required' => 'The paragraph field is required.',

    
    ];  
   private function resetInputFields(){
        $this->heading = '';
        $this->title = '';
        $this->para1 = '';
        $this->para2 = '';
        $this->Image = '';
        $this->buttonName = '';
        $this->buttonLink = '';
        }

        public function saveHomeSection5(){
              // dd($this->all());
              $this->validate();
              if($this->getHomeImg5)  
              {
                      // ===========  working ans stora at storage path   =========== 
                            // $folderPath = public_path('upload/');
                            $folderPath = Storage::path('public/Home-section/');
                            // dd($folderPath);
                            $image_parts = explode(";base64,", $this->getHomeImg5);
                            $image_type_aux = explode("image/", $image_parts[0]);
                            $image_type = $image_type_aux[1];
                            $image_base64 = base64_decode($image_parts[1]);
                            $imageName = time() .'_add' . '.png';
                            $imageFullPath = $folderPath.$imageName;
                            file_put_contents($imageFullPath, $image_base64);                
                    // ===========  working ans stora at storage path   =========== 
              }
  
              HomeSectionFive::create([
                      'heading' =>    $this->heading,
                      'title' =>    $this->title,
                      'para1' =>    $this->para1,
                      'para2' =>     $this->para2 ,
                      'button_name' =>  trim($this->buttonName),
                      'button_link' =>   trim($this->buttonLink),
                      'image' =>   $imageName  ?? Null,
                    ]);
  
          $notification = array(
              'message' => 'Home last Section  Published',
              'alert-type' => 'success'
          );
  return redirect()->route('ViewHomeSection5')->with($notification);
  
        }
}

