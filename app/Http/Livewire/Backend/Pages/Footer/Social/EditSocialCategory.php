<?php

namespace App\Http\Livewire\Backend\Pages\Footer\Social;

use App\Models\SociaCategory;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditSocialCategory extends Component
{
    use WithFileUploads;

 public  $socialCatId, $categoryName, $icon  ,$logo ;

    public function render()
    {
        return view('livewire.backend.pages.footer.social.edit-social-category')->layout('layouts.backend');
    }

    public function mount($id){
        $this->socialCatId= $id;
        $this->editSocial = SociaCategory::where('id', $this->socialCatId)->first();
        if($this->editSocial){
        $this->categoryName  =  $this->editSocial->name;
        $this->icon  =  $this->editSocial->icon;
        $this->logo  =  $this->editSocial->logo;
        }


    }

    protected $rules = [
        'categoryName' => 'required',
    ];

   private function resetInputFields(){
            $this->categoryName = '';
            $this->icon = '';
            $this->logo = '';
        }

        public function updateSocialCategory(){
            $this->validate();

            if($this->logo)  {
                $this->validate([
                    'logo' => 'required|image|mimes:jpg,png,jpeg,svg,webp|max:2040', 
                ]);
                $fileName = time().'_'.$this->logo->getClientOriginalName();
                $filePath = $this->logo->storeAs('social-category', $fileName, 'public');
                SociaCategory::where('id', $this->socialCatId)->update([
             
                    'logo' =>   $fileName ,
                    ]);
                    $notification = array(
                        'message' => 'Social image Updated',
                        'alert-type' => 'info'
                    );
                    return redirect()->route('view_socialMediaCat')->with($notification);
        }else {
            SociaCategory::where('id', $this->socialCatId)->update([
                'name' =>    ucwords($this->categoryName) ,
                'icon' =>    $this->icon,
               
                ]);
                $notification = array(
                    'message' => 'Social Category Updated',
                    'alert-type' => 'info'
                );
                return redirect()->route('view_socialMediaCat')->with($notification);
        }
             
        }

}
