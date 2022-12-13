<?php

namespace App\Http\Livewire\Backend\Pages\Home\Sections;
use App\Models\HomeSectionFive;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
class EditHomeSection5 extends Component
{
    public function render()
    {
        return view('livewire.backend.pages.home.sections.edit-home-section5')->layout('layouts.backend');
    }
    use WithFileUploads;
    public $postId, $heading ,$title ,$para1 ,$para2 ,$Image ,$buttonName ,$buttonLink;
    public $newImg ,$edittHome5Img ,$edittHome5Img2 ,$edittHome5Img3;

    protected $listeners = ['editSec5Img' ,'editSec5Img2' ,'editSec5Img3'];
        
        public function editSec5Img($val){   
            $this->edittHome5Img = $val;

        }
        public function editSec5Img2($val){   
            $this->edittHome5Img2 = $val;

        }
        public function editSec5Img3($val){   
            $this->edittHome5Img3 = $val;
            
        }


    public function mount($id){
        $this->postId = $id;

        $this->editHomeSec5 = HomeSectionFive::where('id', $this->postId)->first();

        if( $this->editHomeSec5 != Null){
            $this->heading  =  $this->editHomeSec5->heading;
            $this->title =  $this->editHomeSec5->title;
            $this->para1 =  $this->editHomeSec5->para1; 
            $this->para2 = $this->editHomeSec5->para2;
            $this->Image = $this->editHomeSec5->image;
            $this->tabletImg = $this->editHomeSec5->tablet_img;
            $this->mobileImg = $this->editHomeSec5->mobile_img;
    
            $this->buttonName = $this->editHomeSec5->button_name;
            $this->buttonLink = $this->editHomeSec5->button_link;
        }
        else {
            $notification = array(
                'message' => 'Not Editable',
                'alert-type' => 'error'
            );
            return redirect()->route('ViewHomeSection5')->with($notification);
        }

    

        $getSection1  = HomeSectionFive::where('id', $this->postId)->where('status',Null)->exists();
        if($getSection1)
        {
            $notification = array(
                'message' => 'Access denied ',
                'alert-type' => 'error'
            );
             return redirect()->route('ViewHomeSection5')->with( $notification);
         }


    }
    protected $rules = [
        'heading' => 'required|string',
        'title' => 'required|string',
        'para1' => 'required ',
        'para2' => 'required',
        'buttonName' => 'required',
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

    public function update_HomeSection5(){
            //  dd($this->all());
            if( $this->edittHome5Img || $this->edittHome5Img2 || $this->edittHome5Img3){

          
             if($this->edittHome5Img)  
             {
            // ===========  working ans stora at storage path   =========== 
                            // $folderPath = public_path('upload/');
                            $folderPath = Storage::path('public/Home-section/');
                            if(isset($this->Image)) {
                             $imagePath = Storage::path('public/Home-section/'. $this->Image);
                                    if(File::exists($imagePath) )
                                    {
                                        unlink($imagePath);
                                    }
                                }
                            // dd($folderPath);
                            $image_parts = explode(";base64,", $this->edittHome5Img);
                            $image_type_aux = explode("image/", $image_parts[0]);
                            $image_type = $image_type_aux[1];
                            $image_base64 = base64_decode($image_parts[1]);
                            $imageName = time() .'_up_desk' . '.png';
                            $imageFullPath = $folderPath.$imageName;
                            file_put_contents($imageFullPath, $image_base64);                
                    // ===========  working ans stora at storage path   =========== 

                    HomeSectionFive::where('id',$this->postId )->update([
                    'image' =>   $imageName  ?? Null,
                  ]);
                }
                if($this->edittHome5Img2)  
                {
                        // ===========  working ans stora at storage path   =========== 
                              // $folderPath = public_path('upload/');
                              $folderPath2 = Storage::path('public/Home-section/');
                              if(isset($this->tabletImg)) {
                               $imagePath2 = Storage::path('public/Home-section/'. $this->tabletImg);
                                if(File::exists($imagePath2) )
                                      {
                                          unlink($imagePath2);
                                      }
                                  }
                              // dd($folderPath);
                              $image_parts2 = explode(";base64,", $this->edittHome5Img2);
                              $image_type_aux2 = explode("image/", $image_parts2[0]);
                              $image_type2 = $image_type_aux2[1];
                              $image_base642 = base64_decode($image_parts2[1]);
                              $imageName2 = time() .'_up_tab' . '.png';
                              $imageFullPath2 = $folderPath2.$imageName2;
                              file_put_contents($imageFullPath2, $image_base642);                
                      // ===========  working ans stora at storage path   =========== 
                        HomeSectionFive::where('id',$this->postId )->update([
                        'tablet_img' =>   $imageName2  ?? Null,
                      ]);
                }
                if($this->edittHome5Img3)  {
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
                              $image_parts3 = explode(";base64,", $this->edittHome5Img3);
                              $image_type_aux3 = explode("image/", $image_parts3[0]);
                              $image_type3 = $image_type_aux3[1];
                              $image_base643 = base64_decode($image_parts3[1]);
                              $imageName3 = time() .'_up_mob' . '.png';
                              $imageFullPath3 = $folderPath3.$imageName3;
                              file_put_contents($imageFullPath3, $image_base643);                
                      // ===========  working ans stora at storage path   =========== 
                        HomeSectionFive::where('id',$this->postId )->update([
                        'mobile_img' =>   $imageName3  ?? Null,
                      ]);
                }
                    $notification = array(
                        'message' => 'Home last Section  Updated',
                        'alert-type' => 'info' 
                    );
             return redirect()->route('ViewHomeSection5')->with($notification);
             }
             else {
                //  $this->validate();
                HomeSectionFive::where('id',$this->postId )->update([
                    'heading' =>    $this->heading,
                    'title' =>    $this->title,
                    'para1' =>    $this->para1,
                    'para2' =>     $this->para2 ,
                    'button_name' =>    trim($this->buttonName),
                    'button_link' =>  trim( $this->buttonLink ),
                   
                  ]);

                    $notification = array(
                    'message' => 'Home last Section  Updated',
                    'alert-type' => 'success' 
                    );
            return redirect()->route('ViewHomeSection5')->with($notification);
             }
 
        
 
        }
}
