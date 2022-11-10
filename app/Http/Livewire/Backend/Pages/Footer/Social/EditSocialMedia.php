<?php

namespace App\Http\Livewire\Backend\Pages\Footer\Social;

use App\Models\SociaCategory;
use App\Models\SocialLinks;
use Livewire\Component;
use Livewire\WithFileUploads;
class EditSocialMedia extends Component
{
    use WithFileUploads;
    public $get_category, $socialId,$social_cat,$category,$link ,$logo,$icon ,$custom_category;

    public $newLogo;

    public function render()
    {
        $this->get_category = SociaCategory::orderBy('name')->get();
        return view('livewire.backend.pages.footer.social.edit-social-media')->layout('layouts.backend');
    }
    public function mount($id){
        $this->socialId= $id;
        $this->editSocial = SocialLinks::where('id', $this->socialId)->first();
        if($this->editSocial){
        $this->category  =  $this->editSocial->category;
        $this->custom_category  =  $this->editSocial->custom_category;
        $this->link  =  $this->editSocial->link;
        $this->icon  =  $this->editSocial->icon;
        $this->logo  =  $this->editSocial->logo;
        }


    }
        protected $rules = [
            'link' => 'required',
        ];
        private function resetInputFields(){
                $this->category = '';
                $this->custom_category = '';
                $this->link = '';
                $this->logo = '';
                $this->newLogo = '';
            }
    public function updateSocialMedia(){
    $this->validate();
    // dd($this->all());
            if($this->newLogo)  {
                $this->validate([
                    'newLogo' => 'required|image|mimes:jpg,png,jpeg,svg,webp|max:2040', 
                ]);
                $fileName = time().'_'.$this->newLogo->getClientOriginalName();
                $filePath = $this->newLogo->storeAs('social-logo', $fileName, 'public');
                                SocialLinks::where('id',$this->socialId)->update([
                                'logo' =>    $fileName  ?? Null,
                                ]);
                                $notification = array(
                                'message' => 'Social image updated',
                                'alert-type' => 'info'
                                );
                        return redirect()->route('view_social_media')->with($notification);
                  
            }else{
             
                    $this->validate([
                            'category' => 'required', 
                            ]);
                            SocialLinks::where('id',$this->socialId)->update([
                            'category' =>    $this->category ,
                            'link' =>    $this->link,
                     
                        ]);
                            $notification = array(
                            'message' => 'Social link updated',
                            'alert-type' => 'success'
                        );
                        return redirect()->route('view_social_media')->with($notification);
                    }
                
            }

    // end mail method 
}

