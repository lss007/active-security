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
    public $getHome5Img, $getHome5Img2, $getHome5Img3;
    protected $listeners = ['getSection5Img' ,'getSection5Img2','getSection5Img3'];    
            public function getSection5Img($val){   
                    $this->getHome5Img = $val;

                  
                }
            public function getSection5Img2($val){   
                    $this->getHome5Img2 = $val;
                }
            public function getSection5Img3($val){   
                    $this->getHome5Img3 = $val;
               

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
        'getHome5Img' => 'required', 
        'getHome5Img2' => 'required', 
        'getHome5Img3' => 'required', 
        'buttonName' => 'required',
        // 'buttonLink' => 'required',
        
    ];
    protected $messages = [
        'getHome5Img.required' => 'The Desktop Image field is required',
        'getHome5Img2.required' => 'The Tablet Image  field is required',
        'getHome5Img3.required' => 'The Mobile Image  field is required',
        'para1.required' => 'The paragraph field is required.',
        'para2.required' => 'The paragraph field is required.',
    ];  
   private function resetInputFields(){
        $this->heading = '';
        $this->title = '';
        $this->para1 = '';
        $this->para2 = '';
        $this->getHome5Img = '';
        $this->getHome5Img2 = '';
        $this->getHome5Img3 = '';

        $this->buttonName = '';
        $this->buttonLink = '';
        }

        public function saveHomeSection5(){
              // dd($this->all());
              $this->validate();
              if($this->getHome5Img)  
              {
                      // ===========  working ans stora at storage path   =========== 
                            // $folderPath = public_path('upload/');
                            $folderPath = Storage::path('public/Home-section/');
                            // dd($folderPath);
                            $image_parts = explode(";base64,", $this->getHome5Img);
                            $image_type_aux = explode("image/", $image_parts[0]);
                            $image_type = $image_type_aux[1];
                            $image_base64 = base64_decode($image_parts[1]);
                            $imageName = time() .'_ad_desk' . '.png';
                            $imageFullPath = $folderPath.$imageName;
                            file_put_contents($imageFullPath, $image_base64);                
                    // ===========  working ans stora at storage path   =========== 
              }
              if($this->getHome5Img2)  
              {
                      // ===========  working ans stora at storage path   =========== 
                            // $folderPath = public_path('upload/');
                            $folderPath2 = Storage::path('public/Home-section/');
                            // dd($folderPath);
                            $image_parts2 = explode(";base64,", $this->getHome5Img2);
                            $image_type_aux2 = explode("image/", $image_parts2[0]);
                            $image_type2 = $image_type_aux2[1];
                            $image_base642 = base64_decode($image_parts2[1]);
                            $imageName2 = time() .'_ad_tab' . '.png';
                            $imageFullPath2 = $folderPath2.$imageName2;
                            file_put_contents($imageFullPath2, $image_base642);                
                    // ===========  working ans stora at storage path   =========== 
              }
              if($this->getHome5Img3)  
              {
                      // ===========  working ans stora at storage path   =========== 
                            // $folderPath = public_path('upload/');
                            $folderPath3 = Storage::path('public/Home-section/');
                            // dd($folderPath);
                            $image_parts3 = explode(";base64,", $this->getHome5Img3);
                            $image_type_aux3 = explode("image/", $image_parts3[0]);
                            $image_type3 = $image_type_aux3[1];
                            $image_base643 = base64_decode($image_parts3[1]);
                            $imageName3 = time() .'_ad_mob' . '.png';
                            $imageFullPath3 = $folderPath3.$imageName3;
                            file_put_contents($imageFullPath3, $image_base643);                
                    // ===========  working ans stora at storage path   =========== 
              }
  
              HomeSectionFive::create([
                      'heading' =>      $this->heading,
                      'title' =>        $this->title,
                      'para1' =>        $this->para1,
                      'para2' =>        $this->para2 ,
                      'button_name' =>  trim($this->buttonName),
                      'button_link' =>  trim($this->buttonLink),
                      'image' =>        $imageName  ?? Null,
                      'tablet_img' =>   $imageName2  ?? Null,
                      'mobile_img' =>   $imageName3  ?? Null,

                    ]);
  
                    $notification = array(
                        'message' => 'Home last Section  Published',
                        'alert-type' => 'success'
                    );
                return redirect()->route('ViewHomeSection5')->with($notification);
                
        }
}

