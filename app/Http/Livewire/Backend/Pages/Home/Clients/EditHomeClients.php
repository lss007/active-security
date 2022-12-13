<?php

namespace App\Http\Livewire\Backend\Pages\Home\Clients;

use App\Models\HomeClientLogo;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
class EditHomeClients extends Component
{
    use WithFileUploads;

    public $title ,$name ,$image ,$link ,$clientId  ,$clientIng;
    public $updateClientImg;
    protected $listeners = ['editClinetImage'];


    public function editClinetImage($val){       
            $this->updateClientImg = $val;
            // dd(' this function is pending \n');
        }
    public function mount($id){
        $this->clientId= $id;
        $this->editHomeclient = HomeClientLogo::where('id', $this->clientId)->where('status',1)->first();
        if( $this->editHomeclient != Null){
            $this->image  =  $this->editHomeclient->image;
        }else {
            $notification = array(
                'message' => 'Not Editable',
                'alert-type' => 'error'
            );
            return redirect()->route('viewHomeclients')->with($notification);
        }
    }
    public function render()
    {
        return view('livewire.backend.pages.home.clients.edit-home-clients')->layout('layouts.backend');
    }

    protected $rules = [
        // 'clientIng' =>  'required|image|mimes:jpg,png,jpeg,svg,webp|max:1040', 
    ];

   private function resetInputFields(){
        $this->clientIng = '';
   
        }

public function saveHomeclients(){

    if($this->clientIng)  
    {
        $fileName = time().'_up'.$this->clientIng->getClientOriginalName();
        $filePath = $this->clientIng->storeAs('Home-clients', $fileName, 'public');

            $imagePath = Storage::path('public/Home-clients/'. $this->image);

            if(File::exists($imagePath)){
      
                unlink($imagePath);
            }
             HomeClientLogo::where('id', $this->clientId)->update([
                     'image' =>    $fileName, ]);
        $notification = array(
            'message' => 'Home Client Updated',
            'alert-type' => 'info'
        );
        return redirect()->route('viewHomeclients')->with($notification);

  
    }

    if( $this->updateClientImg ){
                    // ===========  working ans stora at storage path   =========== 
                            // $folderPath = public_path('upload/');
                            $folderPath = Storage::path('public/Home-clients/');
                            if(isset($this->image)){
                                $imagePath6 = Storage::path('public/Home-clients/'. $this->image);
                                    if(File::exists($imagePath6) ){
                                        unlink($imagePath6);
                                    }
                                }
                            // dd($folderPath);
                            $image_parts = explode(";base64,", $this->updateClientImg);
                            $image_type_aux = explode("image/", $image_parts[0]);
                            $image_type = $image_type_aux[1];
                            $image_base64 = base64_decode($image_parts[1]);
                            $imageName = time().'_up' . '.png';
                            $imageFullPath = $folderPath.$imageName;
                            file_put_contents($imageFullPath, $image_base64);                
            // ===========  working ans stora at storage path   =========== 
                    HomeClientLogo::where('id', $this->clientId)->update([
                        'image' =>    $imageName, 
                    ]);
                            $notification = array(
                                'message' => 'Home Client Updated',
                                'alert-type' => 'info'
                            );
                    return redirect()->route('viewHomeclients')->with($notification);
    }

}
}
