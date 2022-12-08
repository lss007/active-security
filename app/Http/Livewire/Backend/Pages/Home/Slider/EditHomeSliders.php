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
    public $SliderId ,$editHomeSlider,$title,$description,$image,$button_text,$link ,$getRouteName;
    public $newImage ,$updateCropedImg;

    protected $listeners = ['updateSliderImg']; 
    public function updateSliderImg($val){       
            $this->updateCropedImg = $val;
            // dd($this->sliderCropedImg);
        }
    public function mount($id){
                $this->SliderId= $id;
                $this->editHomeSlider = HomeSectionSlider::where('id', $this->SliderId)->where('status',1)->first();
                if( $this->editHomeSlider != Null){
                    $this->title  =  $this->editHomeSlider->title;
                    $this->description =  $this->editHomeSlider->description;
                    $this->image =  $this->editHomeSlider->image; 
                    $this->banner_image = $this->editHomeSlider->banner_image;
                    $this->button_text = $this->editHomeSlider->button_text	;
                    $this->link = $this->editHomeSlider->link;
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
        }
    public function updateHomeSlider(){
        $this->validate();
        if($this->updateCropedImg)  {
        //  $this->validate([
        //      'newImage' => 'required|image|mimes:jpg,png,jpeg,svg,webp|max:2040', 
        //  ]);
        //  $fileName = time().'_'.$this->newImage->getClientOriginalName();
        //  $filePath = $this->newImage->storeAs('Home-slider', $fileName, 'public');
        // ===========  working ans stora at storage path   =========== 
                        // $folderPath = public_path('upload/');
                        $folderPath = Storage::path('public/Home-slider/');

                        $imagePath = Storage::path('public/Home-slider/'. $this->image );

                        if(File::exists($imagePath) && isset($this->image )){
                  
                            unlink($imagePath);
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
            $notification = array(
                'message' => 'Home Slider Updated successfully',
                'alert-type' => 'info'
            );
            return redirect()->route('viewHomesliders')->with($notification);
 }else{
         HomeSectionSlider::where('id',$this->SliderId )->update([
         'title' =>    $this->title,
         'description' =>    $this->description,
         'button_text' =>    $this->button_text,
         'link' =>    $this->link,

         ]);
         $notification = array(
             'message' => 'Home Slider Updated successfully',
             'alert-type' => 'success'
         );
         return redirect()->route('viewHomesliders')->with($notification);
        }
    }
}
