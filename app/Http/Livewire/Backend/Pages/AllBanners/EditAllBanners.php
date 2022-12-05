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

    public $updateCropedImg;
    


    protected $listeners = ['updateAllBannerImg'];
        
    public function updateAllBannerImg($val){       
            $this->updateCropedImg = $val;
        // dd($this->bannerCropedImg);
        }
    public function render()
    {
        $this->getPageCategory =  PageCategory::get();
        return view('livewire.backend.pages.all-banners.edit-all-banners')->layout('layouts.backend');
    }

    public function mount($id){
        $this->allBannerId= $id;
        $this->editAllBanner = AllPagesBanner::where('id', $this->allBannerId)->first();

        if( $this->editAllBanner != Null){
            $this->pageCatId =  $this->editAllBanner->cat_id; 
            $this->Heading =  $this->editAllBanner->heading; 
            $this->Title  =  $this->editAllBanner->title;
            $this->BannerParagaph = $this->editAllBanner->banner_paragaph;
            $this->bannerImage = $this->editAllBanner->banner_image;
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
    protected $rules = [
        'pageCatId' => 'required',
        'Title' => 'required',
        'Heading' => 'required',
        // 'BannerParagaph' => 'required', 

    ];

    protected $messages = [
        'pageCatId.required' => 'Page Category required',
    
      ];
   private function resetInputFields(){
        $this->pageCatId = '';
        $this->Heading = '';
        $this->Title = '';
        // $this->BannerParagaph = '';
        }
    public function updateallBanner(){
        $this->validate();
        if($this->updateCropedImg)  
        {
            // $this->validate([
            //     'NewBanner' => 'required|image|mimes:jpg,png,jpeg,svg,webp|max:2040', 
            // ]);
            //     $fileName = time().'_'.$this->NewBanner->getClientOriginalName();
            //     $filePath = $this->NewBanner->storeAs('All-banner', $fileName, 'public');

                        // ===========  working ans stora at storage path   =========== 
                            // $folderPath = public_path('upload/');
                            $folderPath = Storage::path('public/All-banner/');
                            // dd($folderPath);
                            $image_parts = explode(";base64,", $this->updateCropedImg);
                            $image_type_aux = explode("image/", $image_parts[0]);
                            $image_type = $image_type_aux[1];
                            $image_base64 = base64_decode($image_parts[1]);
                            $imageName = uniqid() . '.png';
                            $imageFullPath = $folderPath.$imageName;
                            file_put_contents($imageFullPath, $image_base64);                
            // ===========  working ans stora at storage path   =========== 
                    AllPagesBanner::where('id', $this->allBannerId)->update([
                    'banner_image' =>    $imageName  ?? Null,
                    ]);
                        $notification = array(
                            'message' => 'Banner Image Updated',
                            'alert-type' => 'success'
                        );
                return redirect()->route('view_all_banner')->with($notification);
        }
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
