<?php

namespace App\Http\Livewire\Backend\Pages\Company;

use App\Models\companySectionTwo;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditSectionTwo extends Component
{
    use WithFileUploads;
    public  $editsections,$post_id,$section_id,$name,$email,$position,
            $department,$heading,$title,$para1,$para2,$para3,$para4;
    public $profile_img,$tablet_banner, $mobile_banner;
    public function render()
    {
        return view('livewire.backend.pages.company.edit-section-two')->layout('layouts.backend');
    }
    
    public $storeCropedImg, $storeCropedImg2,$storeCropedImg3;

    protected $listeners = ['updateCompanyImg' ,'updateCompanyImg2','updateCompanyImg3'];
        
        public function updateCompanyImg($val)
        {       
            $this->storeCropedImg = $val;

            }
        public function updateCompanyImg2($val)
        {       
            $this->storeCropedImg2 = $val;

            }
        public function updateCompanyImg3($val)
        {       
            $this->storeCropedImg3 = $val;
            
            }
    public function mount($id){
        $this->post_id = $id;
        $this->editsections = companySectionTwo::where('id', $this->post_id)->first();
        if( $this->editsections != Null){
            $this->section_id  =  $this->editsections->section_id;
            $this->name  =  $this->editsections->name;
            $this->email  =  $this->editsections->email;
            $this->position  =  $this->editsections->position;
            $this->department  =  $this->editsections->department;
            $this->heading  =  $this->editsections->heading;
            $this->title =  $this->editsections->title;
            $this->para1 =  $this->editsections->para1; 
            $this->para2 = $this->editsections->para2;
            $this->para3 = $this->editsections->para3;

            $this->profile_img = $this->editsections->profile_img;
            $this->tablet_banner = $this->editsections->tablet_banner;
            $this->mobile_banner = $this->editsections->mobile_banner;
        }else 
        {
            $notification = array(
                'message' => 'Not Editable',
                'alert-type' => 'error'
            );
            return redirect()->route('viewCompanySections2')->with($notification);
        }

    }

    protected $rules = [
        'section_id'  => 'required',
        'name' => 'required',
        'email' => 'required|email',
        'position' => 'required',
        'department' => 'required',
        'heading' => 'required',
        'title' => 'required',
        'para1' => 'required',
        'para2' => 'required',
        // 'newprofile' =>  'required|image|mimes:jpg,png,jpeg,svg,webp|max:1040', 

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
            // $this->newprofile = '';
        }
    protected $messages = [
        'section_id.required' => 'The Section  field is required.',
        'para1.required' => 'The paragraph field is required.',
        'para2.required' => 'The paragraph field is required.',
    ];  
    public function updatesections(){
        $this->validate();
        if($this->storeCropedImg || $this->storeCropedImg2 || $this->storeCropedImg3)  {
            if($this->storeCropedImg)  
            {
                // ===========  working ans stora at storage path   =========== 
                    // $folderPath = public_path('upload/');
                    $folderPath = Storage::path('public/company-profile/');
                    if($this->profile_img){
                        $imagePath1 = Storage::path('public/company-profile/'. $this->profile_img);
                        if(File::exists($imagePath1) ){
                            // dd($imagePath);
                            unlink($imagePath1);
                        }
                    }
                    // dd($folderPath);
                    $image_parts = explode(";base64,", $this->storeCropedImg);
                    $image_type_aux = explode("image/", $image_parts[0]);
                    $image_type = $image_type_aux[1];
                    $image_base64 = base64_decode($image_parts[1]);
                    $imageName = time().'_up_desk'. '.png';
                    $imageFullPath = $folderPath.$imageName;
                    file_put_contents($imageFullPath, $image_base64);      
                // ===========  working ans stora at storage path   =========== 
                    companySectionTwo::where('id', $this->post_id)->update([
                    'profile_img' => $imageName ,
                     ]);
            }
            if($this->storeCropedImg2)  
            {
                // ===========  working ans stora at storage path   =========== 
                    // $folderPath = public_path('upload/');
                    $folderPath2 = Storage::path('public/company-profile/');
                    if($this->tablet_banner){
                        $imagePath2 = Storage::path('public/company-profile/'. $this->tablet_banner);
                        if(File::exists($imagePath2) ){
                            // dd($imagePath);
                            unlink($imagePath2);
                        }
                    }
                    // dd($folderPath);
                    $image_parts2 = explode(";base64,", $this->storeCropedImg2);
                    $image_type_aux2 = explode("image/", $image_parts2[0]);
                    $image_type2 = $image_type_aux2[1];
                    $image_base642 = base64_decode($image_parts2[1]);
                    $imageName2 = time().'_up_tab'. '.png';
                    $imageFullPath2 = $folderPath2.$imageName2;
                    file_put_contents($imageFullPath2, $image_base642);      
                // ===========  working ans stora at storage path   =========== 
                    companySectionTwo::where('id', $this->post_id)->update([
                    'tablet_banner' => $imageName2 ,
                     ]);
            }
            if($this->storeCropedImg3)
            {
                // ===========  working ans stora at storage path   =========== 
                    // $folderPath = public_path('upload/');
                    $folderPath3 = Storage::path('public/company-profile/');
                    if($this->mobile_banner){
                        $imagePath3 = Storage::path('public/company-profile/'. $this->mobile_banner);
                        if(File::exists($imagePath3) ){
                            // dd($imagePath);
                            unlink($imagePath3);
                        }
                    }
                    
                    $image_parts3 = explode(";base64,", $this->storeCropedImg3);
                    $image_type_aux3 = explode("image/", $image_parts3[0]);
                    $image_type3 = $image_type_aux3[1];
                    $image_base643 = base64_decode($image_parts3[1]);
                    $imageName3 = time().'_up_mob'. '.png';
                    $imageFullPath3 = $folderPath3.$imageName3;
                    file_put_contents($imageFullPath3, $image_base643);      
                // ===========  working ans stora at storage path   =========== 
                    companySectionTwo::where('id', $this->post_id)->update([
                    'mobile_banner' => $imageName3 ,
                     ]);
                }
                    $notification = array(
                        'message' => 'Profile  images updated',
                        'alert-type' => 'info'
                    );
            return redirect()->route('viewCompanySections2')->with($notification);
    }else 
    {
                companySectionTwo::where('id', $this->post_id)->update([
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
                    ]);

                    $notification = array(
                        'message' => 'Company Section updated',
                        'alert-type' => 'success'
                    );
    return redirect()->route('viewCompanySections2')->with($notification);
    }
      
    }
}
