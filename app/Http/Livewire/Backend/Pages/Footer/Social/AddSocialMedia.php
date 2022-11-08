<?php

namespace App\Http\Livewire\Backend\Pages\Footer\Social;

use App\Models\SociaCategory;
use App\Models\SocialLinks;
use Livewire\Component;
use Livewire\WithFileUploads;
class AddSocialMedia extends Component
{
    use WithFileUploads;
    public $get_category, $social_cat,$category,$link ,$logo,$icon ,$custom_category;
    public function render()
    {
            $this->get_category = SociaCategory::get();
        return view('livewire.backend.pages.footer.social.add-social-media')->layout('layouts.backend');
    }

    protected $rules = [
        'link' => 'required',
    ];

   private function resetInputFields(){
            $this->category = '';
            $this->custom_category = '';
            $this->link = '';
            $this->logo = '';
        }

        public function storeSocialMedia(){
            $this->validate();
            // dd($this->all());
        if($this->logo)  {
            $this->validate([
                'logo' => 'required|image|mimes:jpg,png,jpeg,svg,webp|max:2040', 
            ]);
            $fileName = time().'_'.$this->logo->getClientOriginalName();
            $filePath = $this->logo->storeAs('social-logo', $fileName, 'public');
    }
   if($this->custom_category){
    $this->validate([
        'custom_category' => 'required', 
    ]);
    SocialLinks::create([
            'category' =>    $this->custom_category ,
            'link' =>    $this->link,
            'logo' =>    $fileName  ?? Null,
        ]);
    SociaCategory::create([
            'name' =>    $this->custom_category ,
        ]);
        $notification = array(
            'message' => 'Social link Published',
            'alert-type' => 'success'
        );
        return redirect()->route('view_social_media')->with($notification);
   }else{
    $this->validate([
        'category' => 'required', 
    ]);
    SocialLinks::create([
            'category' =>    $this->category ,
            'link' =>    $this->link,
            'logo' =>    $fileName  ?? Null,
            ]);
            $notification = array(
                'message' => 'Social link Published',
                'alert-type' => 'success'
            );
            return redirect()->route('view_social_media')->with($notification);
        }
    }
    
}

