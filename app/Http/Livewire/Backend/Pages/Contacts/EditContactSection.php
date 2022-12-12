<?php

namespace App\Http\Livewire\Backend\Pages\Contacts;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\ContactSection;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class EditContactSection extends Component
{
    use WithFileUploads;
    public $contactPostId, $editSection,$heading ,$title,$para1,$image;
    public  $tabletImg,$mobileImg ;
    public $ContactCropedImg, $ContactCropedImg2,$ContactCropedImg3;

    protected $listeners = ['editContactImg' ,'editContactImg2','editContactImg3'];
        public function editContactImg($val)
        {       
            $this->ContactCropedImg = $val;
            }
        public function editContactImg2($val)
        {       
            $this->ContactCropedImg2 = $val;
            }
        public function editContactImg3($val)
        {       
            $this->ContactCropedImg3 = $val;
            }
    public function render()
    {
        return view('livewire.backend.pages.contacts.edit-contact-section')->layout('layouts.backend');
    }
    public function mount($id){
        $this->contactPostId = $id;

        $this->editSection= ContactSection::where('id', $this->contactPostId)->first();
        if( $this->editSection != Null){
            $this->heading  =  $this->editSection->heading;
            $this->title =  $this->editSection->title;
            $this->para1 =  $this->editSection->para1; 
            $this->Image = $this->editSection->image;
            $this->tabletImg = $this->editSection->tablet_img;
            $this->mobileImg = $this->editSection->mobile_img;
        }else 
        {
            $notification = array(
                'message' => 'Not Editable',
                'alert-type' => 'error'
            );
            return redirect()->route('Manage_Contacts_section')->with($notification);
        }
    }
    protected $rules = [
        'newimage' =>  'required|image|mimes:jpg,png,jpeg,svg,webp|max:1040', 
    ];
   private function resetInputFields(){
            $this->heading   ='';
            $this->title  ='';
            $this->para1  ='';
            $this->ContactCropedImg = '';
            $this->ContactCropedImg2 = '';
            $this->ContactCropedImg3 = '';
        }
    protected $messages = [
        'para1.required' => 'The paragraph field is required.',

    ];  
    public function updateContactsection(){
        // $this->validate();
        if($this->ContactCropedImg || $this->ContactCropedImg2 || $this->ContactCropedImg3 )  {
            if($this->ContactCropedImg)  
            {
                // ===========  working ans stora at storage path   =========== 
                    // $folderPath = public_path('upload/');
                    $folderPath = Storage::path('public/Contact/');
                    if($this->Image){
                        $imagePath1 = Storage::path('public/Contact/'. $this->Image);
                        if(File::exists($imagePath1) ){
                            // dd($imagePath);
                            unlink($imagePath1);
                        }
                    }
                    // dd($folderPath);
                    $image_parts = explode(";base64,", $this->ContactCropedImg);
                    $image_type_aux = explode("image/", $image_parts[0]);
                    $image_type = $image_type_aux[1];
                    $image_base64 = base64_decode($image_parts[1]);
                    $imageName = time().'_up_desk'. '.png';
                    $imageFullPath = $folderPath.$imageName;
                    file_put_contents($imageFullPath, $image_base64);      
                // ===========  working ans stora at storage path   =========== 
                ContactSection::where('id', $this->contactPostId)->update([
                    'image' => $imageName ,
                     ]);
            }
            if($this->ContactCropedImg2)  
            {
                // ===========  working ans stora at storage path   =========== 
                    // $folderPath = public_path('upload/');
                    $folderPath2 = Storage::path('public/Contact/');
                    if($this->tabletImg){
                        $imagePath2 = Storage::path('public/Contact/'. $this->tabletImg);
                        if(File::exists($imagePath2) ){
                            // dd($imagePath);
                            unlink($imagePath2);
                        }
                    }
                    // dd($folderPath);
                    $image_parts2 = explode(";base64,", $this->ContactCropedImg2);
                    $image_type_aux2 = explode("image/", $image_parts2[0]);
                    $image_type2 = $image_type_aux2[1];
                    $image_base642 = base64_decode($image_parts2[1]);
                    $imageName2 = time().'_up_tab'. '.png';
                    $imageFullPath2 = $folderPath2.$imageName2;
                    file_put_contents($imageFullPath2, $image_base642);      
                // ===========  working ans stora at storage path   =========== 
                ContactSection::where('id', $this->contactPostId)->update([
                    'tablet_img' => $imageName2 ,
                     ]);
            }
            if($this->ContactCropedImg3)
            {
                // ===========  working ans stora at storage path   =========== 
                    // $folderPath = public_path('upload/');
                    $folderPath3 = Storage::path('public/Contact/');
                    if($this->mobileImg){
                        $imagePath3 = Storage::path('public/Contact/'. $this->mobileImg);
                        if(File::exists($imagePath3) ){
                            // dd($imagePath);
                            unlink($imagePath3);
                        }
                    }
                    
                    $image_parts3 = explode(";base64,", $this->ContactCropedImg3);
                    $image_type_aux3 = explode("image/", $image_parts3[0]);
                    $image_type3 = $image_type_aux3[1];
                    $image_base643 = base64_decode($image_parts3[1]);
                    $imageName3 = time().'_up_mob'. '.png';
                    $imageFullPath3 = $folderPath3.$imageName3;
                    file_put_contents($imageFullPath3, $image_base643);      
                // ===========  working ans stora at storage path   =========== 
                ContactSection::where('id', $this->contactPostId)->update([
                    'mobile_img' => $imageName3 ,
                     ]);
                }


                $notification = array(
                    'message' => 'Contact Image Published',
                    'alert-type' => 'info'
                );
                return redirect()->route('Manage_Contacts_section')->with($notification);
         }
        else 
        {
            ContactSection::where('id' , $this->contactPostId)->update([
                    'heading' =>    $this->heading,
                    'title' =>      $this->title,
                    'para1' =>      $this->para1,
                    ]);
                $notification = array(
                    'message' => 'Contact Section Published',
                    'alert-type' => 'success'
                );
                return redirect()->route('Manage_Contacts_section')->with($notification);
            }
    }
}
