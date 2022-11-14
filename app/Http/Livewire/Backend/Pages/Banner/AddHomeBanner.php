<?php

namespace App\Http\Livewire\Backend\Pages\Banner;
use App\Models\HomeBanner ;
use Livewire\Component;
use Livewire\WithFileUploads;
class AddHomeBanner extends Component
{
    use WithFileUploads;
    public $Heading ,$Title,$bannerImage ,$buttonText ,$button_link,$BannerParagaph ;

    protected $rules = [
      
        'Title' => 'required',
        'Heading' => 'required',
        'BannerParagaph' => 'required', 

    ];

   private function resetInputFields(){
       $this->Heading = '';
        $this->Title = '';
        $this->BannerParagaph = '';
        }

    public function saveHomeBanner(){
    // dd($this->all());
        $this->validate();
        if($this->bannerImage)  {
            $this->validate([
                'bannerImage' => 'required|image|mimes:jpg,png,jpeg,svg,webp|max:2040', 
            ]);
            $fileName = time().'_'.$this->bannerImage->getClientOriginalName();
            $filePath = $this->bannerImage->storeAs('Home-banner', $fileName, 'public');
    }
        HomeBanner::create([
            'title' =>    $this->Title,
            'heading' =>    $this->Heading,
            'banner_paragaph' =>    $this->BannerParagaph,
            'banner_image' =>    $fileName  ?? Null,
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
