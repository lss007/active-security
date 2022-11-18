<?php

namespace App\Http\Livewire\Backend\Pages\Footer\Social;

use App\Models\SociaCategory;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddSocialCategory extends Component
{
    use WithFileUploads;
 public  $categoryName, $icon  ,$logo ;
    public function render()
    {
        return view('livewire.backend.pages.footer.social.add-social-category')->layout('layouts.backend');
    }

    protected $rules = [
        'categoryName' => 'required',
    ];

   private function resetInputFields(){
            $this->categoryName = '';
            $this->icon = '';
            $this->logo = '';
        }


        public function storeSocialCategory(){
        $this->validate();

        if($this->logo)  {
            $this->validate([
                'logo' => 'required|image|mimes:jpg,png,jpeg,svg,webp|max:2040', 
            ]);
            $fileName = time().'_'.$this->logo->getClientOriginalName();
            $filePath = $this->logo->storeAs('social-category', $fileName, 'public');
    }
            SociaCategory::create([
                'name' =>    ucwords($this->categoryName) ,
                'icon' =>    $this->icon,
                'logo' =>   $fileName ,
                ]);
                $notification = array(
                    'message' => 'Social Category Published',
                    'alert-type' => 'success'
                );
                return redirect()->route('view_socialMediaCat')->with($notification);
        }
}
