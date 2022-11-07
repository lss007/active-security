<?php

namespace App\Http\Livewire\Backend\Pages\Home\Clients;

use App\Models\HomeClientLogo;
use Livewire\Component;
use Livewire\WithFileUploads;
class AddHomeClients extends Component
{
    use WithFileUploads;

    public $title ,$name ,$image ,$link ;
    public function render()
    {
        return view('livewire.backend.pages.home.clients.add-home-clients')->layout('layouts.backend');
    }
    protected $rules = [
        'image.*' =>  'required|image|mimes:jpg,png,jpeg,svg,webp|max:1040', 
    ];

   private function resetInputFields(){
        $this->image = '';
   
        }

public function saveHomeclients(){

    if($this->image)  
    {
    foreach ($this->image as  $img) 
    {
    $fileName = time().'_'.$img->getClientOriginalName();
    $filePath = $img->storeAs('Home-clients', $fileName, 'public');


             HomeClientLogo::create([
                     'image' =>    $fileName,
                 ]);
        }
        $notification = array(
            'message' => 'Home Client Published',
            'alert-type' => 'success'
        );
        return redirect()->route('viewHomeclients')->with($notification);

  
    }

}
}
