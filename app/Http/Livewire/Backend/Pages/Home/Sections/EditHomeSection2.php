<?php

namespace App\Http\Livewire\Backend\Pages\Home\Sections;

use Livewire\Component;
use App\Models\HomeSectionTwo;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;
class EditHomeSection2 extends Component
{
    use WithFileUploads;

    public $postId, $heading ,$title ,$para1 ,$para2 ,$Image ,$buttonName ,$buttonLink;
    public $newImg  ,$tabletImg ,$mobileImg ,$editHomeSecImg ,$editHomeSecImg2 ,$editHomeSecImg3;

    protected $listeners = ['editSection2Img' ,'editSection2Img2' ,'editSection2Img3'];

        public function editSection2Img($val){   
                $this->editHomeSecImg = $val;
               
            }

        public function editSection2Img2($val){   
                $this->editHomeSecImg2 = $val;

              
            }

        public function editSection2Img3($val){   
                $this->editHomeSecImg3 = $val;
                // dd($this->editHomeSecImg3);
            }
        public function mount($id){
               $this->postId = $id;
            if($this->postId){
                    $this->editHomeSec2 = HomeSectionTwo::where('id', $this->postId)->first();

                    if( $this->editHomeSec2 != Null){
                        $this->heading  =  $this->editHomeSec2->heading;
                        $this->title =  $this->editHomeSec2->title;
                        $this->para1 =  $this->editHomeSec2->para1; 
                        $this->para2 = $this->editHomeSec2->para2;
                        $this->Image = $this->editHomeSec2->image;
                        $this->tabletImg = $this->editHomeSec2->tablet_img;
                        $this->mobileImg = $this->editHomeSec2->mobile_img;
                        $this->buttonName = $this->editHomeSec2->button_name;
                        $this->buttonLink = $this->editHomeSec2->button_link;
                    }
                    else {
                        $notification = array(
                            'message' => 'Not Editable',
                            'alert-type' => 'error'
                        );
                        return redirect()->route('viewHomeSection2')->with($notification);
                    }
       
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
            // $this->validate();
            if($this->editHomeSecImg || $this->editHomeSecImg2 || $this->editHomeSecImg3){
            if($this->editHomeSecImg)  
            {
            // ===========  working ans stora at storage path   =========== 
                    // $folderPath = public_path('upload/');
                    $folderPath = Storage::path('public/Home-section/');
                    if(isset($this->Image))
                    {
                        $imagePath = Storage::path('public/Home-section/'. $this->Image);
                            if(File::exists($imagePath) )
                            {
                                unlink($imagePath);
                            }
                        }
                    // dd($folderPath);
                    $image_parts = explode(";base64,", $this->editHomeSecImg);
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

            }
            if($this->editHomeSecImg2)  
            {
            // ===========  working ans stora at storage path   =========== 
                    // $folderPath = public_path('upload/');
                    $folderPath2 = Storage::path('public/Home-section/');
                    if(isset($this->tabletImg))
                    {
                        $imagePath2 = Storage::path('public/Home-section/'. $this->tabletImg);
                            if(File::exists($imagePath2) )
                            {
                                unlink($imagePath2);
                            }
                        }
                    // dd($folderPath);
                    $image_parts2 = explode(";base64,", $this->editHomeSecImg2);
                    $image_type_aux2 = explode("image/", $image_parts2[0]);
                    $image_type2 = $image_type_aux2[1];
                    $image_base642 = base64_decode($image_parts2[1]);
                    $imageName2 = time() .'_ad_tab' . '.png';
                    $imageFullPath2 = $folderPath2.$imageName2;
                    file_put_contents($imageFullPath2, $image_base642);                
            // ===========  working ans stora at storage path   =========== 
                HomeSectionTwo::where('id', $this->postId)->update([
                     'tablet_img' =>   $imageName2  ?? Null,
                    ]);

            }
            if($this->editHomeSecImg3)  
            {
            // ===========  working ans stora at storage path   =========== 
                    // $folderPath = public_path('upload/');
                    $folderPath3 = Storage::path('public/Home-section/');
                    if(isset($this->mobileImg))
                    {
                        $imagePath3 = Storage::path('public/Home-section/'. $this->mobileImg);
                            if(File::exists($imagePath3) )
                            {
                                unlink($imagePath3);
                            }
                        }
                    // dd($folderPath);
                    $image_parts3 = explode(";base64,", $this->editHomeSecImg3);
                    $image_type_aux3 = explode("image/", $image_parts3[0]);
                    $image_type3 = $image_type_aux3[1];
                    $image_base643 = base64_decode($image_parts3[1]);
                    $imageName3 = time() .'_ad_mob' . '.png';
                    $imageFullPath3 = $folderPath3.$imageName3;
                    file_put_contents($imageFullPath3, $image_base643);                
            // ===========  working ans stora at storage path   =========== 
                HomeSectionTwo::where('id', $this->postId)->update([
                      'mobile_img' =>   $imageName3  ?? Null,
                    ]);
            }

            
            $notification = array(
                'message' => 'Home Section 2 updated',
                'alert-type' => 'info'
            );
        return redirect()->route('viewHomeSection2')->with($notification);
        }
            else {
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
