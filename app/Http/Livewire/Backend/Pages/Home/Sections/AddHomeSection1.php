<?php

namespace App\Http\Livewire\Backend\Pages\Home\Sections;

use App\Models\HomeSectionOne;
use Livewire\Component;
use Livewire\WithFileUploads;
class AddHomeSection1 extends Component
{
    use WithFileUploads;
    public $heading,$sub_heading,$paragraph,$main_image,$logo1,$logo2,$logo3;
    
    public function mount()
    {
     $getSection1  = HomeSectionOne::exists();
     if($getSection1)
     {
         $notification = array(
             'message' => 'Section already exists',
             'alert-type' => 'warning'
         );
          return redirect()->route('manageHomeSection1')->with( $notification);
      }
    }
    protected $rules = [
        'heading' => 'required',
        'sub_heading' => 'required',
        'paragraph' => 'required',
        'main_image' => 'required|image|mimes:jpg,png,jpeg,svg,webp', 
        'logo1' => 'required|image|mimes:jpg,png,jpeg,svg,webp|max:1040', 
        'logo2' => 'required|image|mimes:jpg,png,jpeg,svg,webp|max:1040', 
        'logo3' => 'required|image|mimes:jpg,png,jpeg,svg,webp|max:1040', 
    ];
   private function resetInputFields(){
        $this->heading = '';
        $this->sub_heading = '';
        $this->paragraph = '';
        $this->main_image = '';
        $this->logo1 = '';
        $this->logo2 = '';
        $this->logo3 = '';
        }
    public function render()
    {
        return view('livewire.backend.pages.home.sections.add-home-section1')->layout('layouts.backend');
    }
    public function saveHomeSection1(){
        $this->validate();

        if($this->main_image)  {
            $this->validate([
                'main_image' => 'required|image|mimes:jpg,png,jpeg,svg,webp|max:2040', 
            ]);
            $fileName1 = time().'_'.$this->main_image->getClientOriginalName();
            $filePath1 = $this->main_image->storeAs('Home-section', $fileName1, 'public');
        }
        if($this->logo1)  {
            $this->validate([
                'logo1' => 'required|image|mimes:jpg,png,jpeg,svg,webp|max:2040', 
            ]);
            $logoimg1 = time().'_'.$this->logo1->getClientOriginalName();
            $filePath2 = $this->logo1->storeAs('Home-section', $logoimg1, 'public');
        }

        if($this->logo3)  {
            $this->validate([
                'logo2' => 'required|image|mimes:jpg,png,jpeg,svg,webp|max:2040', 
            ]);
            $logoimg2 = time().'_'.$this->logo2->getClientOriginalName();
            $filePath3 = $this->logo2->storeAs('Home-section', $logoimg2, 'public');
        }

        if($this->logo3)  {
            $this->validate([
                'logo3' => 'required|image|mimes:jpg,png,jpeg,svg,webp|max:2040', 
            ]);
            $logoimg3 = time().'_'.$this->logo3->getClientOriginalName();
            $filePath4 = $this->logo3->storeAs('Home-section', $logoimg3, 'public');
        }
             HomeSectionOne::create([
                    'heading' =>    $this->heading,
                    'sub_heading' =>    $this->sub_heading,
                    'paragraph' =>    $this->paragraph,
                    'main_image' =>     $fileName1 ,
                    'logo1' =>    $logoimg1 ?? Null,
                    'logo2' =>   $logoimg2 ?? Null,
                    'logo3' =>    $logoimg3 ?? Null,
            ]);
         
            $notification = array(
                'message' => 'Home Section published successfully',
                'alert-type' => 'success'
            );
            return redirect()->route('manageHomeSection1')->with($notification);
    }
}
