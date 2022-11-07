<?php

namespace App\Http\Livewire\Backend\Pages\Home\Slider;

use Livewire\Component;
use App\Models\HomeSectionSlider;
use Livewire\WithFileUploads;
class EditHomeSliders extends Component
{

    use WithFileUploads;
    public $SliderId ,$editHomeSlider,$title,$description,$image,$button_text,$link;
    public $newImage ;
        public function mount($id){
                $this->SliderId= $id;
                $this->editHomeSlider = HomeSectionSlider::where('id', $this->SliderId)->where('status',1)->first();
                $this->title  =  $this->editHomeSlider->title;
                $this->description =  $this->editHomeSlider->description;
                $this->image =  $this->editHomeSlider->image; 
                $this->banner_image = $this->editHomeSlider->banner_image;
                $this->button_text = $this->editHomeSlider->button_text	;
                $this->link = $this->editHomeSlider->link;
     }
    public function render()
    {
        return view('livewire.backend.pages.home.slider.edit-home-sliders')->layout('layouts.backend');
    }
    protected $rules = [
        'title' => 'required',
        'description' => 'required',

      
      
     ];

   private function resetInputFields(){
            $this->title  = '';
            $this->description = '';
            $this->image = '';
            $this->button_text = '';
            $this->link = '';
        }
    public function updateHomeSlider(){
        $this->validate();
        if($this->newImage)  {
         $this->validate([
             'newImage' => 'required|image|mimes:jpg,png,jpeg,svg,webp|max:2040', 
         ]);
         $fileName = time().'_'.$this->newImage->getClientOriginalName();
         $filePath = $this->newImage->storeAs('Home-slider', $fileName, 'public');
         HomeSectionSlider::where('id',$this->SliderId )->update([

            'image' =>    $fileName  ?? Null,
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
