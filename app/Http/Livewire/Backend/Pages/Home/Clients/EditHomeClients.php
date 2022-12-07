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



    
    // protected $listeners = ['addClinetImage'];


    // public function addClinetImage($val){       
    //         $this->storeClientImg = $val;
    //     // dd($this->storeClientImg);
    //     }
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
        'clientIng' =>  'required|image|mimes:jpg,png,jpeg,svg,webp|max:1040', 
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

}
}
