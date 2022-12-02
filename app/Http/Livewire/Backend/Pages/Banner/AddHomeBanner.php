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
    public $cropedImg;

    protected $rules = [
      
        'Title' => 'required',
        'Heading' => 'required',
        'BannerParagaph' => 'required', 

    ];

        protected $listeners = ['getCropImg'];
        
        public function getCropImg($val){       
                $this->cropedImg = $val;
            // dd($this->cropedImg);
            }
        
        private function resetInputFields(){
            $this->Heading = '';
            $this->Title = '';
            $this->BannerParagaph = '';
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
                            $imageName = uniqid() . '.png';
                            $imageFullPath = $folderPath.$imageName;
                            file_put_contents($imageFullPath, $image_base64);                
            // ===========  working ans stora at storage path   =========== 

            }
        HomeBanner::create([
            'title' =>    $this->Title,
            'heading' =>    $this->Heading,
            'banner_paragaph' =>    $this->BannerParagaph,
            'banner_image' =>       $imageName  ?? Null,
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
