<?php

namespace App\Http\Livewire\Backend\Pages\AllBanners;

use App\Models\AllPagesBanner;
use App\Models\PageCategory;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditAllBanners extends Component
{
    use WithFileUploads;
    public $getPageCategory ,$pageCatId,$editAllBanner ,$allBannerId ,$NewBanner;
    public $Heading ,$Title,$bannerImage ,$buttonText ,$button_link,$BannerParagaph ;
    public function render()
    {
        $this->getPageCategory =  PageCategory::get();
        return view('livewire.backend.pages.all-banners.edit-all-banners')->layout('layouts.backend');
    }

    public function mount($id){
        $this->allBannerId= $id;
        $this->editAllBanner = AllPagesBanner::where('id', $this->allBannerId)->first();
        $this->pageCatId =  $this->editAllBanner->cat_id; 
        $this->Heading =  $this->editAllBanner->heading; 
        $this->Title  =  $this->editAllBanner->title;
        $this->BannerParagaph = $this->editAllBanner->banner_paragaph;
        $this->bannerImage = $this->editAllBanner->banner_image;
        $this->buttonText = $this->editAllBanner->button_text	;
        $this->button_link = $this->editAllBanner->button_link;
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
        if($this->NewBanner)  
        {
            $this->validate([
                'NewBanner' => 'required|image|mimes:jpg,png,jpeg,svg,webp|max:2040', 
            ]);
                $fileName = time().'_'.$this->NewBanner->getClientOriginalName();
                $filePath = $this->NewBanner->storeAs('All-banner', $fileName, 'public');
                    AllPagesBanner::where('id', $this->allBannerId)->update([
                    'banner_image' =>    $fileName  ?? Null,
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
