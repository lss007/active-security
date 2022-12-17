<?php

namespace App\Http\Livewire\Backend\Pages\Home\Slider;

use Livewire\Component;
use App\Models\HomeSectionSlider;
use App\Models\RouteNameList;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;
class EditHomeSliders extends Component
{
    use WithFileUploads;
    public $SliderId ,$editHomeSlider,$title,$description,$image,$button_text,$link ,$custom,$customLink,$getRouteName;

    public $newImage ,$updateCropedImg ,$updateCropedImg2 ,$updateCropedImg3 ;

    public $tabletImg,$mobileImg ;

    protected $listeners = ['updateSliderImg' ,'updateSliderImg2' ,'updateSliderImg3']; 

    public function updateSliderImg($val){       
            $this->updateCropedImg = $val;
            // dd($this->updateCropedImg);
        }
        public function updateSliderImg2($val){       
            $this->updateCropedImg2 = $val;
            // dd($this->updateCropedImg2);
        }
        public function updateSliderImg3($val){       
            $this->updateCropedImg3 = $val;
            // dd($this->updateCropedImg3);
        }
      
    public function mount($id){
            $this->SliderId= $id;
            $this->editHomeSlider = HomeSectionSlider::where('id', $this->SliderId)->where('status',1)->first();
            if( $this->editHomeSlider != Null){
                $this->title  =  $this->editHomeSlider->title;
                $this->description =  $this->editHomeSlider->description;
                $this->image =  $this->editHomeSlider->image; 
                $this->tabletImg =  $this->editHomeSlider->tablet_img; 
                $this->mobileImg =  $this->editHomeSlider->mobile_img; 
                $this->button_text = $this->editHomeSlider->button_text	;
                $this->link = $this->editHomeSlider->link;
                $this->editcustomLink = $this->editHomeSlider->custom_Link;

            }else {
                $notification = array(
                    'message' => 'Not Editable',
                    'alert-type' => 'error'
                );
                return redirect()->route('viewHomesliders')->with($notification);
            }
        
     }
    public function render()
    {
            $this->getRouteName =    RouteNameList::get();
            return view('livewire.backend.pages.home.slider.edit-home-sliders')->layout('layouts.backend');
    }
    protected $rules = [
        'title' => 'required',
        'description' => 'required',

     ];
   private function resetInputFields(){
            $this->title  = '';
            $this->description = '';
            $this->updateCropedImg = '';
            $this->button_text = '';
            $this->link = '';
            $this->updateCropedImg = '';
            $this->updateCropedImg2 = '';
            $this->updateCropedImg3 = '';  
        }
    public function updateHomeSlider(){
        $this->validate();
        if($this->updateCropedImg || $this->updateCropedImg2 || $this->updateCropedImg3){
            if($this->updateCropedImg)  {
                // ===========  working ans stora at storage path   =========== 
                    // $folderPath = public_path('upload/');
                    $folderPath = Storage::path('public/Home-slider/');
                    if($this->image ){
                    $imagePath = Storage::path('public/Home-slider/'. $this->image );
                    if(File::exists($imagePath) ){
                        unlink($imagePath);
                        }
                    }
                    // dd($folderPath);
                    $image_parts = explode(";base64,", $this->updateCropedImg);
                    $image_type_aux = explode("image/", $image_parts[0]);
                    $image_type = $image_type_aux[1];
                    $image_base64 = base64_decode($image_parts[1]);
                    $imageName = time().'_up'. '.png';
                    $imageFullPath = $folderPath.$imageName;
                    file_put_contents($imageFullPath, $image_base64);                
                // ===========  working ans stora at storage path   =========== 
                     HomeSectionSlider::where('id',$this->SliderId )->update([
                         'image' =>   $imageName  ?? Null,
                     ]);
             
                }

                if($this->updateCropedImg2)  {
                    // ===========  working ans stora at storage path   =========== 
                        // $folderPath = public_path('upload/');
                        $folderPath2 = Storage::path('public/Home-slider/');
                        if($this->tabletImg){
                        $imagePath2 = Storage::path('public/Home-slider/'. $this->tabletImg );
                        if(File::exists($imagePath2) ){
                            unlink($imagePath2);
                            }
                        }
                        // dd($folderPath);
                        $image_parts2 = explode(";base64,", $this->updateCropedImg2);
                        $image_type_aux2 = explode("image/", $image_parts2[0]);
                        $image_type2 = $image_type_aux2[1];
                        $image_base642 = base64_decode($image_parts2[1]);
                        $imageName2 = time().'_up'. '.png';
                        $imageFullPath2 = $folderPath2.$imageName2;
                        file_put_contents($imageFullPath2, $image_base642);                
                    // ===========  working ans stora at storage path   =========== 
                         HomeSectionSlider::where('id',$this->SliderId )->update([
                             'tablet_img' =>   $imageName2  ?? Null,
                         ]);
                 
                    }

                    if($this->updateCropedImg3)  {
                        // ===========  working ans stora at storage path   =========== 
                            // $folderPath = public_path('upload/');
                            $folderPath3 = Storage::path('public/Home-slider/');
                            if($this->mobileImg ){
                            $imagePath3 = Storage::path('public/Home-slider/'. $this->mobileImg );
                            if(File::exists($imagePath3) ){
                                unlink($imagePath3);
                                }
                            }
                            // dd($folderPath);
                            $image_parts3 = explode(";base64,", $this->updateCropedImg3);
                            $image_type_aux3 = explode("image/", $image_parts3[0]);
                            $image_type3 = $image_type_aux3[1];
                            $image_base643 = base64_decode($image_parts3[1]);
                            $imageName3 = time().'_up'. '.png';
                            $imageFullPath3 = $folderPath3.$imageName3;
                            file_put_contents($imageFullPath3, $image_base643);                
                        // ===========  working ans stora at storage path   =========== 
                             HomeSectionSlider::where('id',$this->SliderId )->update([
                                 'mobile_img' =>   $imageName3  ?? Null,
                             ]);
                     
                         }
                            $notification = array(
                                'message' => 'Home Slider Updated successfully',
                                'alert-type' => 'info'
                            );
                            return redirect()->route('viewHomesliders')->with($notification);
            }
        else{
            if($this->customLink){
                HomeSectionSlider::where('id',$this->SliderId )->update([
                    'custom_Link' =>    $this->customLink,
                    'link' =>    Null ,
                    ]);
            }
            else{
                HomeSectionSlider::where('id',$this->SliderId )->update([
                    'link' =>    $this->link ,
                    'custom_Link' =>   NUll,
                    ]);
            }
                HomeSectionSlider::where('id',$this->SliderId )->update([
                'title' =>    $this->title,
                'description' =>    $this->description,
                'button_text' =>    $this->button_text,
                // 'link' =>    $this->link ?? NUll,

                ]);
                    $notification = array(
                        'message' => 'Home Slider Updated successfully',
                        'alert-type' => 'success'
                    );
                return redirect()->route('viewHomesliders')->with($notification);
        }
    }
}
