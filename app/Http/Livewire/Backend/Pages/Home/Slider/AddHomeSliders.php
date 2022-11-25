<?php

namespace App\Http\Livewire\Backend\Pages\Home\Slider;

use App\Models\HomeSectionSlider;
use App\Models\RouteNameList;
use Livewire\Component;
use Livewire\WithFileUploads;
class AddHomeSliders extends Component
{
    use WithFileUploads;
    public $title,$description,$image,$button_text,$link ,$getRouteName;
    public function render()
    {
            $this->getRouteName =    RouteNameList::get();
            return view('livewire.backend.pages.home.slider.add-home-sliders')->layout('layouts.backend');
    }
    protected $rules = [
        'title' => 'required',
        'description' => 'required',
        'image' => 'required |image|mimes:jpg,png,jpeg,svg,webp|max:2040',
      
      
     ];

   private function resetInputFields(){
            $this->title  = '';
            $this->description = '';
            $this->image = '';
            $this->button_text = '';
            $this->link = '';
        }
        public function  storeHomeSlider(){
           $this->validate();
           if($this->image)  {
            $this->validate([
                'image' => 'required|image|mimes:jpg,png,jpeg,svg,webp|max:2040', 
            ]);
            $fileName = time().'_'.$this->image->getClientOriginalName();
            $filePath = $this->image->storeAs('Home-slider', $fileName, 'public');
    }
            HomeSectionSlider::create([
            'title' =>    $this->title,
            'description' =>    $this->description,
            'button_text' =>    $this->button_text,
            'link' =>    $this->link,
            'image' =>    $fileName  ?? Null,
            ]);
            $notification = array(
                'message' => 'Home Slider published successfully',
                'alert-type' => 'success'
            );
            return redirect()->route('viewHomesliders')->with($notification);
        }
}
