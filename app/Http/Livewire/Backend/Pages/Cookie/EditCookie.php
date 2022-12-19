<?php

namespace App\Http\Livewire\Backend\Pages\Cookie;

use App\Models\Cookie;
use Livewire\Component;

class EditCookie extends Component
{
    public $cookieId,$cookietext, $declineBtn ,$acceptBtn;
    public function render()
    {
        return view('livewire.backend.pages.cookie.edit-cookie')->layout('layouts.backend');
    }
    public function mount($id){
        $this->cookieId = $id;

        $this->editcookie= Cookie::where('id', $this->cookieId)->first();
        if( $this->editcookie != Null){
        $this->cookietext  =  $this->editcookie->text;
        $this->acceptBtn =  $this->editcookie->accept; 
        $this->declineBtn =  $this->editcookie->decline;
        }else 
        {
            $notification = array(
                'message' => 'Not Editable',
                'alert-type' => 'error'
            );
            return redirect()->route('admin_view_cookie')->with($notification);
        }


    }
    protected $rules = [
        'cookietext' => 'required',
        'declineBtn' => 'required',
        'acceptBtn' => 'required',

    ];
    protected $messages = [
        'cookietext.required' => 'The Cookie text field is required.',
        'acceptBtn.required' => 'Accept Button  ield is required.',
        'declineBtn.required' => 'Decline Button field is required.',


    ]; 
    private function resetInputFields(){
                $this->cookietext   ='';
                $this->acceptBtn  ='';
                $this->declineBtn  ='';
            }
    public function updateCookieText(){

        $this->validate();

        $data  =  Cookie::find($this->cookieId);
        $data->text =    $this->cookietext;
        $data->accept =    $this->acceptBtn;
        $data->decline =    $this->declineBtn;
        $data->save();

    $notification = array(
            'message' => 'Cookie Text Updated',
            'alert-type' => 'info'
        );
     return redirect()->route('admin_view_cookie')->with($notification);
    }

}
