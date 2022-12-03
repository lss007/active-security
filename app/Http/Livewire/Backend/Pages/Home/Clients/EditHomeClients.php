<?php

namespace App\Http\Livewire\Backend\Pages\Home\Clients;

use App\Models\HomeClientLogo;
use Livewire\Component;
use Livewire\WithFileUploads;
class EditHomeClients extends Component
{
    use WithFileUploads;

    public $title ,$name ,$image ,$link ,$clientId  ,$clientIng;



    
    protected $listeners = ['addClinetImage'];


    public function addClinetImage($val){       
            $this->storeClientImg = $val;
        // dd($this->storeClientImg);
        }
    public function mount($id){
        $this->clientId= $id;
        $this->editHomeclient = HomeClientLogo::where('id', $this->clientId)->where('status',1)->first();

    }
    public function render()
    {
        return view('livewire.backend.pages.home.clients.edit-home-clients')->layout('layouts.backend');
    }

    protected $rules = [
        'clientIng.*' =>  'required|image|mimes:jpg,png,jpeg,svg,webp|max:1040', 
    ];

   private function resetInputFields(){
        $this->image = '';
   
        }

public function saveHomeclients(){

    if($this->clientIng)  
    {
        $fileName = time().'_'.$this->clientIng->getClientOriginalName();
            $filePath = $this->clientIng->storeAs('Home-clients', $fileName, 'public');
             HomeClientLogo::where('id', $this->clientId)->update([
                     'image' =>    $fileName,
                 ]);
        $notification = array(
            'message' => 'Home Client Updated',
            'alert-type' => 'info'
        );
        return redirect()->route('viewHomeclients')->with($notification);

  
    }

}
}
