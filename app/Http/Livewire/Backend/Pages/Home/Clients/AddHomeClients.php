<?php

namespace App\Http\Livewire\Backend\Pages\Home\Clients;

use App\Models\HomeClientLogo;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
class AddHomeClients extends Component
{
    use WithFileUploads;

    public $title ,$name ,$image ,$link ;
    public $storeClientImg;
 
    protected $rules = [
        'storeClientImg' => 'required', 
    ];


    protected $messages = [
        'storeClientImg.required' => 'The main image field is required.',
   
      ];
    

    protected $listeners = ['addClinetImage'];


    public function addClinetImage($val){       
            $this->storeClientImg = $val;
        // dd($this->storeClientImg);
        }
   private function resetInputFields(){
        $this->storeClientImg = '';
   
        }

public function render()
{
    return view('livewire.backend.pages.home.clients.add-home-clients')->layout('layouts.backend');
}
public function saveHomeclients(){
        $this->validate();
    if($this->storeClientImg)  
    {
    // foreach ($this->storeClientImg as  $img) 
    // {
    // $fileName = time().'_'.$img->getClientOriginalName();
    // $filePath = $img->storeAs('Home-clients', $fileName, 'public');

        // ===========  working ans stora at storage path   =========== 
                            // $folderPath = public_path('upload/');
                            $folderPath = Storage::path('public/Home-clients/');
                            // dd($folderPath);
                            $image_parts = explode(";base64,", $this->storeClientImg);
                            $image_type_aux = explode("image/", $image_parts[0]);
                            $image_type = $image_type_aux[1];
                            $image_base64 = base64_decode($image_parts[1]);
                            $imageName = time().'_add' . '.png';
                            $imageFullPath = $folderPath.$imageName;
                            file_put_contents($imageFullPath, $image_base64);                
            // ===========  working ans stora at storage path   =========== 

             HomeClientLogo::create([
                     'image' =>  $imageName,
                 ]);
        // }
        $notification = array(
            'message' => 'Home Client Published',
            'alert-type' => 'success'
        );
        return redirect()->route('viewHomeclients')->with($notification);

  
    }

}


}
