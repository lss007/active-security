<?php

namespace App\Http\Livewire\Backend\Pages\AllBanners;

use App\Models\AllPagesBanner;
use App\Models\PageCategory;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditAllBanners extends Component
{
    use WithFileUploads;
    public $getPageCategory ,$pageCatId,$editAllBanner ,$allBannerId ,$NewBanner;
    public $Heading ,$Title,$bannerImage ,$buttonText ,$button_link,$BannerParagaph ;


    public $updateCropedImg ,$updateCropedImg2,$updateCropedImg3 ;
    

    public function mount($id){
        $this->allBannerId= $id;
        $this->editAllBanner = AllPagesBanner::where('id', $this->allBannerId)->first();

        if( $this->editAllBanner != Null){
            $this->pageCatId =  $this->editAllBanner->cat_id; 
            $this->Heading =  $this->editAllBanner->heading; 
            $this->Title  =  $this->editAllBanner->title;
            $this->BannerParagaph = $this->editAllBanner->banner_paragaph;
            $this->bannerImage = $this->editAllBanner->banner_image;
            $this->tablet_banner = $this->editAllBanner->tablet_banner;
            $this->mobile_banner = $this->editAllBanner->mobile_banner;

            $this->buttonText = $this->editAllBanner->button_text	;
            $this->button_link = $this->editAllBanner->button_link;
        }else {
            $notification = array(
                'message' => 'Not Editable',
                'alert-type' => 'error'
            );
            return redirect()->route('view_all_banner')->with($notification);
        }
    }

    protected $listeners = ['updateAllBannerImg' ,'updateAllBannerImg2','updateAllBannerImg3'];

    public function updateAllBannerImg($val){       
            $this->updateCropedImg = $val;
       
      
        }

        public function updateAllBannerImg2($val){       
            $this->updateCropedImg2 = $val;
           
        }

        public function updateAllBannerImg3($val){       
            $this->updateCropedImg3 = $val;
            // dd($this->updateCropedImg3);
        }
    public function render()
    {
        $this->getPageCategory =  PageCategory::get();
        return view('livewire.backend.pages.all-banners.edit-all-banners')->layout('layouts.backend');
    }


    protected $rules = [
        'pageCatId' => 'required',
        'Title' => 'required',
        'Heading' => 'required',



    ];

    protected $messages = [
        'pageCatId.required' => 'Page Category required',
        

    
      ];
   private function resetInputFields(){
        $this->pageCatId = '';
        $this->Heading = '';
        $this->Title = '';
        $this->updateCropedImg = '';
        $this->updateCropedImg2 = '';
        $this->updateCropedImg3 = '';

        // $this->BannerParagaph = '';
        }
    public function updateallBanner(){
        $this->validate();

        if( $this->updateCropedImg || $this->updateCropedImg2 || $this->updateCropedImg3 )  {
        
        if($this->updateCropedImg)  
        {
            dd($this->updateCropedImg);
            // ===========  working ans stora at storage path   =========== 
                            // $folderPath = public_path('upload/');
                            $folderPath = Storage::path('public/All-banner/');
                            // dd($folderPath);
                            $image_parts = explode(";base64,", $this->updateCropedImg);
                            $image_type_aux = explode("image/", $image_parts[0]);
                            $image_type = $image_type_aux[1];
                            $image_base64 = base64_decode($image_parts[1]);
                            $imageName = time().'_up_desk' . '.png';
                            $imageFullPath = $folderPath.$imageName;
                            file_put_contents($imageFullPath, $image_base64);                
            // ===========  working ans stora at storage path   =========== 
                    AllPagesBanner::where('id', $this->allBannerId)->update([
                    'banner_image' =>    $imageName  ?? Null,
                    ]);
              
        }

        if($this->updateCropedImg2)  
        {
            // ===========  working ans stora at storage path   =========== 
                            // $folderPath = public_path('upload/');
                            $folderPath2 = Storage::path('public/All-banner/');
                            // dd($folderPath);
                            $image_parts2 = explode(";base64,", $this->updateCropedImg2);
                            $image_type_aux2 = explode("image/", $image_parts2[0]);
                            $image_type2 = $image_type_aux2[1];
                            $image_base642 = base64_decode($image_parts2[1]);
                            $imageName2 = time().'_up_tab' . '.png';
                            $imageFullPath2 = $folderPath2.$imageName2;
                            file_put_contents($imageFullPath2, $image_base642);                
            // ===========  working ans stora at storage path   =========== 
                    AllPagesBanner::where('id', $this->allBannerId)->update([
                    'tablet_banner' =>    $imageName2  ?? Null,
                    ]);
              
        }


        if($this->updateCropedImg3)  
        {
            // ===========  working ans stora at storage path   =========== 
                            // $folderPath = public_path('upload/');
                            $folderPath3 = Storage::path('public/All-banner/');
                            // dd($folderPath);
                            $image_parts3 = explode(";base64,", $this->updateCropedImg3);
                            $image_type_aux3 = explode("image/", $image_parts3[0]);
                            $image_type3 = $image_type_aux3[1];
                            $image_base643 = base64_decode($image_parts3[1]);
                            $imageName3 = time().'_up_desk' . '.png';
                            $imageFullPath3 = $folderPath3.$imageName3;
                            file_put_contents($imageFullPath3, $image_base643);                
            // ===========  working ans stora at storage path   =========== 
                    AllPagesBanner::where('id', $this->allBannerId)->update([
                    'mobile_banner' =>    $imageName3  ?? Null,
                    ]);
              
        }
        // end  inner if 


                        $notification = array(
                            'message' => 'Banner Image Updated',
                            'alert-type' => 'success'
                        );
                    return redirect()->route('view_all_banner')->with($notification);
    }
    // main if end 
        else 
            {
                AllPagesBanner::where('id', $this->allBannerId)->update([
                    'cat_id' => $this->pageCatId,
                    'title' =>    $this->Title,
                    'heading' =>    $this->Heading,
                    // 'banner_paragaph' =>    $this->BannerParagaph,
                    'button_text' =>    $this->buttonText ,
                    'button_link' =>    $this->button_link,

                ]);
                        $notification = array(
                            'message' => 'Banner Text Updated',
                            'alert-type' => 'success'
                        );
                    return redirect()->route('view_all_banner')->with($notification);
            }
       
    }
}
