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

    public $bannerCropedImg, $bannerCropedImg2,$bannerCropedImg3;

    protected $listeners = ['addAllBannerImg' ,'addAllBannerImg2','addAllBannerImg3'];
        
    public function addAllBannerImg($val){       
            $this->bannerCropedImg = $val;
            // dd($this->bannerCropedImg);
        }
        public function addAllBannerImg2($val){       
            $this->bannerCropedImg2 = $val;
        }
        public function addAllBannerImg3($val){       
            $this->bannerCropedImg3 = $val;
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
        'bannerCropedImg2' => 'required',
        'bannerCropedImg3' => 'required',
        // 'BannerParagaph' => 'required', 
    ];

    protected $messages = [
        'bannerCropedImg.required' => 'The Banner Image field is required',
        'bannerCropedImg2.required' => 'The Tablet Image field is required',
        'bannerCropedImg3.required' => 'The Mobile Image field is required',
        'pageCatId.required' => 'Page Category required',
      ];
    private function resetInputFields(){
        $this->pageCatId = '';
        $this->Heading = '';
        $this->Title = '';
        // $this->BannerParagaph = '';
        }

    public function saveallBanner(){
            $this->validate();
            if($this->bannerCropedImg)  {
                // $this->validate([
                //     'bannerImage' => 'required|image|mimes:jpg,png,jpeg,svg,webp|max:2040', 
                // ]);
            // ===========  working ans stora at storage path   =========== 
                            // $folderPath = public_path('upload/');
                            $folderPath = Storage::path('public/All-banner/');
                            // dd($folderPath);
                            $image_parts = explode(";base64,", $this->bannerCropedImg);
                            $image_type_aux = explode("image/", $image_parts[0]);
                            $image_type = $image_type_aux[1];
                            $image_base64 = base64_decode($image_parts[1]);
                            $imageName = time().'_ad_desk'. '.png';
                            $imageFullPath = $folderPath.$imageName;
                            file_put_contents($imageFullPath, $image_base64);      
            // ===========  working ans stora at storage path   =========== 
                }
                if($this->bannerCropedImg2)  {
            // ===========  working ans stora at storage path   =========== 
                            // $folderPath = public_path('upload/');
                            $folderPath2 = Storage::path('public/All-banner/');
                            // dd($folderPath);
                            $image_parts2 = explode(";base64,", $this->bannerCropedImg2);
                            $image_type_aux2 = explode("image/", $image_parts2[0]);
                            $image_type2 = $image_type_aux2[1];
                            $image_base642 = base64_decode($image_parts2[1]);
                            $imageName2 = time().'_ad_tab'. '.png';
                            $imageFullPath2 = $folderPath2.$imageName2;
                            file_put_contents($imageFullPath2, $image_base642);                
            // ===========  working ans stora at storage path   =========== 
                }
                if($this->bannerCropedImg3)  {
            // ===========  working ans stora at storage path   =========== 
                            // $folderPath = public_path('upload/');
                            $folderPath3 = Storage::path('public/All-banner/');
                            // dd($folderPath);
                            $image_parts3 = explode(";base64,", $this->bannerCropedImg3);
                            $image_type_aux3 = explode("image/", $image_parts3[0]);
                            $image_type3 = $image_type_aux3[1];
                            $image_base643 = base64_decode($image_parts3[1]);
                            $imageName3 = time().'_ad_mob'. '.png';
                            $imageFullPath3= $folderPath3.$imageName3;
                            file_put_contents($imageFullPath3, $image_base643);                
            // ===========  working ans stora at storage path   =========== 
        }
        AllPagesBanner::create([
                'cat_id' => $this->pageCatId,
                'title' =>    $this->Title,
                'heading' =>    $this->Heading,
                // 'banner_paragaph' =>    $this->BannerParagaph,
                'banner_image' =>    $imageName  ?? Null,
                'tablet_banner' =>    $imageName2  ?? Null,
                'mobile_banner' =>    $imageName3  ?? Null,
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
