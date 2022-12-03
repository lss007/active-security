<?php

namespace App\Http\Livewire\Backend\Pages\Home\Sections;

use App\Models\HomeSectionOne;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
class AddHomeSection1 extends Component
{
    use WithFileUploads;
    public $heading,$sub_heading,$paragraph,$main_image,$logo1,$logo2,$logo3;
    public $getSectionCropedImg;

    protected $listeners = ['getSection1Img'];
        
     public function getSection1Img($val){       
                $this->getSectionCropedImg = $val;
          
            }
        

    public function mount()
    {
     $getSection1  = HomeSectionOne::where('status',1)->exists();
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
        'getSectionCropedImg' => 'required', 
        'logo1' => 'required|image|mimes:jpg,png,jpeg,svg,webp|max:1040', 
        'logo2' => 'required|image|mimes:jpg,png,jpeg,svg,webp|max:1040', 
        'logo3' => 'required|image|mimes:jpg,png,jpeg,svg,webp|max:1040', 
    ];
    protected $messages = [
        'getSectionCropedImg.required' => 'The main image field is required.',
   
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

        if($this->getSectionCropedImg)  {
            // $this->validate([
            //     'main_image' => 'required|image|mimes:jpg,png,jpeg,svg,webp|max:2040', 
            // ]);
            // $fileName1 = time().'_'.$this->main_image->getClientOriginalName();
            // $filePath1 = $this->main_image->storeAs('Home-section', $fileName1, 'public');
               // ===========  working ans stora at storage path   =========== 
                            // $folderPath = public_path('upload/');
                            $folderPath = Storage::path('public/Home-section/');
                            // dd($folderPath);
                            $image_parts = explode(";base64,", $this->getSectionCropedImg);
                            $image_type_aux = explode("image/", $image_parts[0]);
                            $image_type = $image_type_aux[1];
                            $image_base64 = base64_decode($image_parts[1]);
                            $imageName = uniqid() . '.png';
                            $imageFullPath = $folderPath.$imageName;
                            file_put_contents($imageFullPath, $image_base64);                
            // ===========  working ans stora at storage path   =========== 
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
                    'main_image' =>     $imageName ,
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
