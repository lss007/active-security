<?php

namespace App\Http\Livewire\Backend\Pages\Contacts;

use App\Models\ContactSection;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddContactSection extends Component
{
    use WithFileUploads;

public $heading ,$title,$para1,$image;


public $ConCropedImg, $ConCropedImg2,$ConCropedImg3;

protected $listeners = ['addContactImg' ,'addContactImg2','addContactImg3'];
    public function addContactImg($val)
    {       
        $this->ConCropedImg = $val;
        }
    public function addContactImg2($val)
    {       
        $this->ConCropedImg2 = $val;
        }
    public function addContactImg3($val)
    {       
        $this->ConCropedImg3 = $val;
        }

    public function render()
    {
        return view('livewire.backend.pages.contacts.add-contact-section')->layout('layouts.backend');
    }
    protected $rules = [
        'ConCropedImg' =>  'required', 
        'ConCropedImg2' =>  'required', 
        'ConCropedImg3' =>  'required', 
    ];
   private function resetInputFields(){
            $this->heading   ='';
            $this->title  ='';
            $this->para1  ='';


        }
    protected $messages = [
        'para1.required' => 'The paragraph field is required.',
        'ConCropedImg.required'  =>  'The Desktop Image field is required',
        'ConCropedImg2.required' => 'The Tablet Image field is required',
        'ConCropedImg3.required' => 'The Mobile Image field is required',
    ];  
    public function saveContactSection(){
        $this->validate();
    
            if($this->ConCropedImg)  
            {
                // ===========  working ans stora at storage path   =========== 
                    // $folderPath = public_path('upload/');
                    $folderPath = Storage::path('public/Contact/');
                    $image_parts = explode(";base64,", $this->ConCropedImg);
                    $image_type_aux = explode("image/", $image_parts[0]);
                    $image_type = $image_type_aux[1];
                    $image_base64 = base64_decode($image_parts[1]);
                    $imageName = time().'_ad_desk'. '.png';
                    $imageFullPath = $folderPath.$imageName;
                    file_put_contents($imageFullPath, $image_base64);      
                // ===========  working ans stora at storage path   =========== 
            }
            if($this->ConCropedImg2)  
            {
                // ===========  working ans stora at storage path   =========== 
                    // $folderPath = public_path('upload/');
                    $folderPath2 = Storage::path('public/Contact/');
                    $image_parts2 = explode(";base64,", $this->ConCropedImg2);
                    $image_type_aux2 = explode("image/", $image_parts2[0]);
                    $image_type2 = $image_type_aux2[1];
                    $image_base642 = base64_decode($image_parts2[1]);
                    $imageName2 = time().'_ad_tab'. '.png';
                    $imageFullPath2 = $folderPath2.$imageName2;
                    file_put_contents($imageFullPath2, $image_base642);      
                // ===========  working ans stora at storage path   =========== 
            }
            if($this->ConCropedImg3)
            {
                // ===========  working ans stora at storage path   =========== 
                    // $folderPath = public_path('upload/');
                    $folderPath3 = Storage::path('public/Contact/');
                    $image_parts3 = explode(";base64,", $this->ConCropedImg3);
                    $image_type_aux3 = explode("image/", $image_parts3[0]);
                    $image_type3 = $image_type_aux3[1];
                    $image_base643 = base64_decode($image_parts3[1]);
                    $imageName3 = time().'_ad_mob'. '.png';
                    $imageFullPath3 = $folderPath3.$imageName3;
                    file_put_contents($imageFullPath3, $image_base643);      
                // ===========  working ans stora at storage path   =========== 
                }
            
                ContactSection::create([
                        'heading'   =>    $this->heading,
                        'title'     =>      $this->title,
                        'para1'     =>      $this->para1,
                        'image'     =>      $imageName,
                        'tablet_img' => $imageName2,
                        'mobile_img' => $imageName3,

                        ]);
                $notification = array(
                    'message' => 'Contact Section Published',
                    'alert-type' => 'success'
                );
                return redirect()->route('Manage_Contacts_section')->with($notification);
    }
}
