<?php

namespace App\Http\Livewire\Backend\Pages\Footer\Logos;

use App\Models\FooterLogo;
use Livewire\Component;
use Livewire\WithFileUploads;
class EditFooterLogo extends Component
{
    use WithFileUploads;
    Public $get_logo ,$name ,$logo_img ,$link;
    public $new_logo; 
    public function render()
    {
        return view('livewire.backend.pages.footer.logos.edit-footer-logo')->layout('layouts.backend');
    }
    public function mount($id){

        $this->logoId= $id;
        $this->editLogo = FooterLogo::where('id', $this->logoId)->first();
        if($this->editLogo){
            $this->name  =  $this->editLogo->name;
            $this->logo_img  =  $this->editLogo->logo_img;
            $this->link  =  $this->editLogo->link;
        }
         
       
    }

         protected $rules = [
            'name' =>'required',
            'logo_img.*' =>  'required|image|mimes:jpg,png,jpeg,svg,webp|max:1040', 
          ];

        private function resetInputFields(){
          $this->name = '';
          $this->logo_img = '';
   
        }

    public function updateFooterlogo(){
           $this->validate();
    if($this->new_logo)  
    {
        $fileName = time().'_'.$this->new_logo->getClientOriginalName();
        $filePath = $this->new_logo->storeAs('footer-logo', $fileName, 'public');
        FooterLogo::where('id',$this->logoId )->update([
                'logo_img' =>    $fileName,
            ]);
                $notification = array(
                'message' => 'Home Logo Updated',
                'alert-type' => 'info'
            );
            return redirect()->route('view_footer_logos')->with($notification);
    }else {
        FooterLogo::where('id',$this->logoId )->update([
            'name' =>    $this->name,

        ]);
            $notification = array(
            'message' => 'Home Category Updated',
            'alert-type' => 'success'
        );
        return redirect()->route('view_footer_logos')->with($notification);

    }
}

}
