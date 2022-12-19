<?php

namespace App\Http\Livewire\Backend\Pages\Home\Slider;

use App\Models\HomeSectionSlider;
use App\Models\RouteNameList;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
class AddHomeSliders extends Component
{
    use WithFileUploads;
    public $title, $description, $image, $button_text ,$custom;
    public $sliderCropedImg ,$sliderCropedImg2 ,$sliderCropedImg3, $link,$customLink, $getRouteName;
    protected $listeners = ['addSliderImg' ,'addSliderImg2' ,'addSliderImg3'];   
    public function addSliderImg($val){       
            $this->sliderCropedImg = $val;
            // dd($this->sliderCropedImg);
        }
    public function addSliderImg2($val){       
            $this->sliderCropedImg2 = $val;
            // dd($this->sliderCropedImg);
        }
    public function addSliderImg3($val){       
            $this->sliderCropedImg3 = $val;
            // dd($this->sliderCropedImg);
        }
 

    public function render()
    {
        $this->getRouteName = RouteNameList::get();
        return view('livewire.backend.pages.home.slider.add-home-sliders')->layout('layouts.backend');
    }
    protected $rules = [
        'title' => 'required',
        'description' => 'required',
        'sliderCropedImg' => 'required',
        'sliderCropedImg2' => 'required',
        'sliderCropedImg3' => 'required',
     ];
     protected $messages = [
        'sliderCropedImg.required' =>  'The Desktop Image field is required.',
        'sliderCropedImg2.required' => 'The Tablet Image field is required.',
        'sliderCropedImg3.required' => 'The Mobile Image field is required.',
      ];
   private function resetInputFields(){
            $this->title  = '';
            $this->description = '';
            $this->sliderCropedImg = '';
            $this->button_text = '';
            $this->link = '';
            $this->customLink = '';
            $this->sliderCropedImg = '';
            $this->sliderCropedImg2 = '';
            $this->sliderCropedImg3 = '';
        }
        public function  storeHomeSlider(){
            // dd($this->customLink);
           $this->validate();
           if($this->sliderCropedImg)  {
            // ===========  working ans stora at storage path   =========== 
                            // $folderPath = public_path('upload/');
                            $folderPath = Storage::path('public/Home-slider/');
                            // dd($folderPath);
                            $image_parts = explode(";base64,", $this->sliderCropedImg);
                            $image_type_aux = explode("image/", $image_parts[0]);
                            $image_type = $image_type_aux[1];
                            $image_base64 = base64_decode($image_parts[1]);
                            $imageName = time().'_ad_desk'. '.png';
                            $imageFullPath = $folderPath.$imageName;
                            file_put_contents($imageFullPath, $image_base64);                
            // ===========  working ans stora at storage path   =========== 
            }
            if($this->sliderCropedImg2){
             // ===========  working ans stora at storage path   =========== 
                            // $folderPath = public_path('upload/');
                            $folderPath2 = Storage::path('public/Home-slider/');
                            // dd($folderPath);
                            $image_parts2 = explode(";base64,", $this->sliderCropedImg2);
                            $image_type_aux2 = explode("image/", $image_parts2[0]);
                            $image_type2 = $image_type_aux2[1];
                            $image_base642 = base64_decode($image_parts2[1]);
                            $imageName2 = time().'_tab' . '.png';
                   
                            $imageFullPath2 = $folderPath2.$imageName2;
                            file_put_contents($imageFullPath2, $image_base642);                
            // ===========  working ans stora at storage path   =========== 

            }
        if($this->sliderCropedImg3){
             // ===========  working ans stora at storage path   =========== 
                            // $folderPath = public_path('upload/');
                            $folderPath3 = Storage::path('public/Home-slider/');
                            // dd($folderPath);
                            $image_parts3 = explode(";base64,", $this->sliderCropedImg3);
                            $image_type_aux3 = explode("image/", $image_parts3[0]);
                            $image_type3 = $image_type_aux3[1];
                            $image_base643 = base64_decode($image_parts3[1]);
                            $imageName3 = time().'_mob' . '.png';
                       
                            $imageFullPath3 = $folderPath3.$imageName3;
                            file_put_contents($imageFullPath3, $image_base643);                
            // ===========  working ans stora at storage path   =========== 
            }
                 if( $this->customLink)
                 {
                    HomeSectionSlider::create([
                        'title' =>    $this->title,
                        'description' =>    $this->description,
                        'button_text' =>    $this->button_text,
                        // 'custom_Link' =>    $this->customLink,
                        // 'link' =>           $this->link,
                        'custom_Link' =>    $this->customLink,
                        'link' => NULL,
                        'image' =>         $imageName  ?? Null,
                        'tablet_img' =>    $imageName2  ?? Null,
                        'mobile_img' =>    $imageName3  ?? Null,
                        ]);
                 }else{
                    HomeSectionSlider::create([
                        'title' =>    $this->title,
                        'description' =>    $this->description,
                        'button_text' =>    $this->button_text,
                        // 'custom_Link' =>    $this->customLink,
                        // 'link' =>           $this->link,
                        'custom_Link' =>    NULL,
                        'link' =>           $this->link,
                        'image' =>         $imageName  ?? Null,
                        'tablet_img' =>    $imageName2  ?? Null,
                        'mobile_img' =>    $imageName3  ?? Null,
                        ]);
                 }

            $notification = array(
                'message' => 'Home Slider published successfully',
                'alert-type' => 'success'
            );
            return redirect()->route('viewHomesliders')->with($notification);
        }
}
