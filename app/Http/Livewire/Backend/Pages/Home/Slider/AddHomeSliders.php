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
    public $title,$description,$image,$button_text,$link ,$getRouteName;
    public $sliderCropedImg;


    
    protected $listeners = ['addSliderImg'];
        
    public function addSliderImg($val){       
            $this->sliderCropedImg = $val;
        // dd($this->sliderCropedImg);
        }
    public function render()
    {
            $this->getRouteName =    RouteNameList::get();
            return view('livewire.backend.pages.home.slider.add-home-sliders')->layout('layouts.backend');
    }
    protected $rules = [
        'title' => 'required',
        'description' => 'required',
        'sliderCropedImg' => 'required',
     ];

     protected $messages = [
        'sliderCropedImg.required' => 'The Slider Image field is required.',
   
      ];
   private function resetInputFields(){
            $this->title  = '';
            $this->description = '';
            $this->sliderCropedImg = '';
            $this->button_text = '';
            $this->link = '';
        }
        public function  storeHomeSlider(){
           $this->validate();
           if($this->sliderCropedImg)  {
            // $this->validate([
            //     'image' => 'required|image|mimes:jpg,png,jpeg,svg,webp|max:2040', 
            // ]);
            // $fileName = time().'_'.$this->image->getClientOriginalName();
            // $filePath = $this->image->storeAs('Home-slider', $fileName, 'public');
            
            // ===========  working ans stora at storage path   =========== 
                            // $folderPath = public_path('upload/');
                            $folderPath = Storage::path('public/Home-slider/');
                            // dd($folderPath);
                            $image_parts = explode(";base64,", $this->sliderCropedImg);
                            $image_type_aux = explode("image/", $image_parts[0]);
                            $image_type = $image_type_aux[1];
                            $image_base64 = base64_decode($image_parts[1]);
                            $imageName = time().'_add'. '.png';
                            $imageFullPath = $folderPath.$imageName;
                            file_put_contents($imageFullPath, $image_base64);                
            // ===========  working ans stora at storage path   =========== 
    }
            HomeSectionSlider::create([
            'title' =>    $this->title,
            'description' =>    $this->description,
            'button_text' =>    $this->button_text,
            'link' =>    $this->link,
            'image' =>    $imageName  ?? Null,
            ]);
            $notification = array(
                'message' => 'Home Slider published successfully',
                'alert-type' => 'success'
            );
            return redirect()->route('viewHomesliders')->with($notification);
        }
}
