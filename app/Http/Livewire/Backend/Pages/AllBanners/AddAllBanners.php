<?php

namespace App\Http\Livewire\Backend\Pages\AllBanners;

use App\Models\AllPagesBanner;
use App\Models\PageCategory;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddAllBanners extends Component
{
    use WithFileUploads;
    public $getPageCategory, $pageCatId;
    public $Heading ,$Title,$bannerImage ,$buttonText ,$button_link,$BannerParagaph ;

    public function render()
    {
        $this->getPageCategory =  PageCategory::get();
        return view('livewire.backend.pages.all-banners.add-all-banners')->layout('layouts.backend');
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

        public function saveallBanner(){
            $this->validate();
            if($this->bannerImage)  {
                $this->validate([
                    'bannerImage' => 'required|image|mimes:jpg,png,jpeg,svg,webp|max:2040', 
                ]);
                $fileName = time().'_'.$this->bannerImage->getClientOriginalName();
                $filePath = $this->bannerImage->storeAs('All-banner', $fileName, 'public');
        }
        AllPagesBanner::create([
                'cat_id' => $this->pageCatId,
                'title' =>    $this->Title,
                'heading' =>    $this->Heading,
                // 'banner_paragaph' =>    $this->BannerParagaph,
                'banner_image' =>    $fileName  ?? Null,
                'button_text' =>    $buttonText  ?? Null,
                'button_link' =>    $this->button_link,
    
                
                ]);
                $notification = array(
                    'message' => ' Banner Published ',
                    'alert-type' => 'success'
                );
                return redirect()->route('view_all_banner')->with($notification);
    
        }

}
