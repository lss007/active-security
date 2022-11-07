<?php

namespace App\Http\Livewire\Backend\Pages\Banner;
use App\Models\HomeBanner ;
use Livewire\Component;
use Livewire\WithFileUploads;
class AddHomeBanner extends Component
{
    use WithFileUploads;
    public $mainTitle,$mainSubTitle ,$heading ,$bannerImage ,$buttonText ,$button_link,$bannerParagaph ;

    protected $rules = [
        'mainTitle' => 'required',
        'mainSubTitle' => 'required',
        'heading' => 'required',
        'bannerParagaph' => 'required', 

    ];

   private function resetInputFields(){
        $this->mainTitle = '';
        $this->mainSubTitle = '';
        $this->heading = '';
        $this->bannerParagaph = '';
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
            'main_title' =>    $this->mainTitle,
            'main_sub_title' =>    $this->mainSubTitle,
            'heading' =>    $this->heading,
            'banner_paragaph' =>    $this->bannerParagaph,
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
