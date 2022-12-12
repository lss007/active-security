<?php

namespace App\Http\Livewire\Backend\Pages\Company;

use App\Models\companySectionTwo;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
class AddSectionTwo extends Component
{
use WithFileUploads;
    public  $section_id ,$name ,$email,$position,$department,
            $profile_img,$heading,$title,$para1,$para2,$para3,$para4;
    public function render()
    {
        return view('livewire.backend.pages.company.add-section-two')->layout('layouts.backend');
    }

    public $companyCropedImg, $companyCropedImg2,$companyCropedImg3;

    protected $listeners = ['CropCompanyImg' ,'CropCompanyImg2','CropCompanyImg3'];
        
        public function CropCompanyImg($val)
        {       
            $this->companyCropedImg = $val;

            }
        public function CropCompanyImg2($val)
        {       
            $this->companyCropedImg2 = $val;

            }
        public function CropCompanyImg3($val)
        {       
            $this->companyCropedImg3 = $val;
            
            }
    protected $rules = [
        'section_id'        => 'required',
        'name'              => 'required',
        'email'             => 'required|email',
        'position'          => 'required',
        'department'        => 'required',
        'heading'           => 'required',
        'title'             => 'required',
        'para1'             => 'required',
        'para2'             => 'required',
        'companyCropedImg'  =>  'required', 
        'companyCropedImg2'  =>  'required', 
        'companyCropedImg3'  =>  'required', 

    ];
    protected $messages = [
        'companyCropedImg.required'  =>  'The Banner Image field is required',
        'companyCropedImg2.required' => 'The Tablet Banner field is required',
        'companyCropedImg3.required' => 'The Mobile Banner field is required',
    ];
   private function resetInputFields(){
            $this->section_id   = '';
            $this->name   = '';
            $this->email  = '';
            $this->position  = '';
            $this->department  = '';
            $this->heading   ='';
            $this->title  ='';
            $this->para1  ='';
            $this->para2  ='';
            $this->companyCropedImg = '';
            $this->companyCropedImg2 = '';
            $this->companyCropedImg3 = '';

  
        }
  
    public function saveCompanysection2(){
        $this->validate();
        if($this->companyCropedImg)  {
          
            // ===========  working ans stora at storage path   =========== 
                            // $folderPath = public_path('upload/');
                            $folderPath = Storage::path('public/company-profile/');
                            // dd($folderPath);
                            $image_parts = explode(";base64,", $this->companyCropedImg);
                            $image_type_aux = explode("image/", $image_parts[0]);
                            $image_type = $image_type_aux[1];
                            $image_base64 = base64_decode($image_parts[1]);
                            $imageName = time().'_ad_desk'. '.png';
                            $imageFullPath = $folderPath.$imageName;
                            file_put_contents($imageFullPath, $image_base64);      
            // ===========  working ans stora at storage path   =========== 
        }
        if($this->companyCropedImg2)  {
            // ===========  working ans stora at storage path   =========== 
                            // $folderPath = public_path('upload/');
                            $folderPath2 = Storage::path('public/company-profile/');
                            // dd($folderPath);
                            $image_parts2 = explode(";base64,", $this->companyCropedImg2);
                            $image_type_aux2 = explode("image/", $image_parts2[0]);
                            $image_type2 = $image_type_aux2[1];
                            $image_base642 = base64_decode($image_parts2[1]);
                            $imageName2 = time().'_ad_tab'. '.png';
                            $imageFullPath2 = $folderPath2.$imageName2;
                            file_put_contents($imageFullPath2, $image_base642);      
            // ===========  working ans stora at storage path   =========== 
        }
        if($this->companyCropedImg3)  {
            // ===========  working ans stora at storage path   =========== 
                            // $folderPath = public_path('upload/');
                            $folderPath3 = Storage::path('public/company-profile/');
                            // dd($folderPath);
                            $image_parts3 = explode(";base64,", $this->companyCropedImg3);
                            $image_type_aux3 = explode("image/", $image_parts3[0]);
                            $image_type3 = $image_type_aux3[1];
                            $image_base643 = base64_decode($image_parts3[1]);
                            $imageName3 = time().'_ad_mob'. '.png';
                            $imageFullPath3 = $folderPath3.$imageName3;
                            file_put_contents($imageFullPath3, $image_base643);      
            // ===========  working ans stora at storage path   =========== 
        }

        companySectionTwo::create([
            'section_id'  =>      $this->section_id,
            'name'  =>      $this->name,
            'email' =>      $this->email,
            'position' =>   $this->position,
            'department' => $this->department,
            'heading' =>    $this->heading,
            'title' =>      $this->title,
            'para1' =>      $this->para1,
            'para2' =>      $this->para2,
            'para3' =>      $this->para3,
            'profile_img' => $imageName,
            'tablet_banner' => $imageName2 ,
            'mobile_banner' => $imageName3 ,
             ]);

        $notification = array(
        'message' => 'Company Section Published',
        'alert-type' => 'success'
        );
    return redirect()->route('viewCompanySections2')->with($notification);
    }
}
