<?php

namespace App\Http\Livewire\Backend\Pages\Banner;
use App\Models\HomeBanner ;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
class AddHomeBanner extends Component
{
    use WithFileUploads;
    public $Heading ,$Title,$bannerImage ,$buttonText ,$button_link,$BannerParagaph;
    public $cropedImg ,$cropedImg2,$cropedImg3;

    protected $rules = [
        'Title'         => 'required',
        'Heading'       => 'required',
        'BannerParagaph'=> 'required', 
        'cropedImg'     => 'required', 
        'cropedImg2'     => 'required', 
        'cropedImg3'     => 'required', 
    ];
    protected $messages = [
        'cropedImg.required' => 'The Banner Image field is required.',
        'cropedImg2.required' => 'The Tablet Image  field is required.',
        'cropedImg3.required' => 'The Mobile Image  field is required.',
      ];
    protected $listeners = ['getCropImg' ,'getCropImg2' ,'getCropImg3'];

    public function getCropImg($val){       
                $this->cropedImg = $val;
            }

    public function getCropImg2($val){       
                $this->cropedImg2 = $val;
            }

    public function getCropImg3($val){       
                $this->cropedImg3= $val;
            }
        
    private function resetInputFields(){
            $this->Heading = '';
            $this->Title = '';
            $this->BannerParagaph = '';
            $this->cropedImg = '';
            $this->cropedImg2 = '';
            $this->cropedImg3 = '';
        }

    public function saveHomeBanner(){
           
            $this->validate();
        if($this->cropedImg)  
            {
                // $this->validate([
                //     'cropedImg' => 'required|image|mimes:jpg,png,jpeg,svg,webp|max:2040', 
                // ]);
             // ===========  working ans stora at storage path   =========== 
                            // $folderPath = public_path('upload/');
                            $folderPath = Storage::path('public/Home-banner/');
                            // dd($folderPath);
                            $image_parts = explode(";base64,", $this->cropedImg);
                            $image_type_aux = explode("image/", $image_parts[0]);
                            $image_type = $image_type_aux[1];
                            $image_base64 = base64_decode($image_parts[1]);
                            $imageName = time().'_desk' . '.png';
                            $imageFullPath = $folderPath.$imageName;
                            file_put_contents($imageFullPath, $image_base64);                
            // ===========  working ans stora at storage path   =========== 

            }
        if($this->cropedImg2)  
            {
           
             // ===========  working ans stora at storage path   =========== 
                            // $folderPath = public_path('upload/');
                            $folderPath2 = Storage::path('public/Home-banner/');
                            // dd($folderPath);
                            $image_parts2 = explode(";base64,", $this->cropedImg2);
                            $image_type_aux2 = explode("image/", $image_parts2[0]);
                            $image_type2 = $image_type_aux2[1];
                            $image_base642 = base64_decode($image_parts2[1]);
                            $imageName2 = time().'_tab' . '.png';
                            $imageFullPath2 = $folderPath2.$imageName2;
                            file_put_contents($imageFullPath2, $image_base642);                
            // ===========  working ans stora at storage path   =========== 

            }
        if($this->cropedImg3)  
            {
        
             // ===========  working ans stora at storage path   =========== 
                            // $folderPath = public_path('upload/');
                            $folderPath3 = Storage::path('public/Home-banner/');
                            // dd($folderPath);
                            $image_parts3 = explode(";base64,", $this->cropedImg3);
                            $image_type_aux3 = explode("image/", $image_parts[0]);
                            $image_type3 = $image_type_aux3[1];
                            $image_base643 = base64_decode($image_parts3[1]);
                            $imageName3 = time().'_mob' . '.png';
                            $imageFullPath3 = $folderPath3.$imageName3;
                            file_put_contents($imageFullPath3, $image_base643);                
            // ===========  working ans stora at storage path   =========== 

            }
        HomeBanner::create([
            'title' =>    $this->Title,
            'heading' =>    $this->Heading,
            'banner_paragaph' =>    $this->BannerParagaph,
            'banner_image' =>       $imageName  ?? Null,
            'tablet_banner' =>       $imageName2  ?? Null,
            'mobile_banner' =>       $imageName3  ?? Null,
            'button_text' =>    $buttonText  ?? Null,
            'button_link' =>    $this->button_link,

            
            ]);
            $notification = array(
                'message' => 'Home Banner published successfully',
                'alert-type' => 'success'
            );
            return redirect()->route('viewHomebanner')->with($notification);

    
    }
    public function render()
    {
        return view('livewire.backend.pages.banner.add-home-banner')->layout('layouts.backend');
    }

}
