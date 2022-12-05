<?php

namespace App\Http\Livewire\Backend\Pages\AllBanners;

use App\Models\AllPagesBanner;
use App\Models\PageCategory;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddAllBanners extends Component
{
    use WithFileUploads;
    public $getPageCategory, $pageCatId;
    public $Heading ,$Title,$bannerImage ,$buttonText ,$button_link,$BannerParagaph ;
    public $bannerCropedImg;
    protected $listeners = ['addAllBannerImg'];
        
    public function addAllBannerImg($val){       
            $this->bannerCropedImg = $val;
        // dd($this->bannerCropedImg);
        }
    public function render()
    {
        $this->getPageCategory =  PageCategory::get();
        return view('livewire.backend.pages.all-banners.add-all-banners')->layout('layouts.backend');
    }

    protected $rules = [
        'pageCatId' => 'required',
        'Title' => 'required',
        'Heading' => 'required',
        'bannerCropedImg' => 'required',
        // 'BannerParagaph' => 'required', 

    ];

    protected $messages = [
        'bannerCropedImg.required' => 'The Banner Image field is required',
        'pageCatId.required' => 'Page Category required',
    
      ];
   private function resetInputFields(){
        $this->pageCatId = '';
        $this->Heading = '';
        $this->Title = '';
        // $this->BannerParagaph = '';
        }

        public function saveallBanner(){
            // $this->validate();
            if($this->bannerCropedImg)  {
                // $this->validate([
                //     'bannerImage' => 'required|image|mimes:jpg,png,jpeg,svg,webp|max:2040', 
                // ]);
                // $fileName = time().'_'.$this->bannerImage->getClientOriginalName();
                // $filePath = $this->bannerImage->storeAs('All-banner', $fileName, 'public');

            // ===========  working ans stora at storage path   =========== 
                            // $folderPath = public_path('upload/');
                            $folderPath = Storage::path('public/All-banner/');
                            // dd($folderPath);
                            $image_parts = explode(";base64,", $this->bannerCropedImg);
                            $image_type_aux = explode("image/", $image_parts[0]);
                            $image_type = $image_type_aux[1];
                            $image_base64 = base64_decode($image_parts[1]);
                            $imageName = uniqid() . '.png';
                            $imageFullPath = $folderPath.$imageName;
                            file_put_contents($imageFullPath, $image_base64);                
            // ===========  working ans stora at storage path   =========== 
        }
        AllPagesBanner::create([
                'cat_id' => $this->pageCatId,
                'title' =>    $this->Title,
                'heading' =>    $this->Heading,
                // 'banner_paragaph' =>    $this->BannerParagaph,
                'banner_image' =>    $imageName  ?? Null,
                'button_text' =>    trim($this->buttonText) ,
                'button_link' =>   trim($this->button_link),
    
                
                ]);
                $notification = array(
                    'message' => ' Banner Published ',
                    'alert-type' => 'success'
                );
                return redirect()->route('view_all_banner')->with($notification);
    
        }

}
