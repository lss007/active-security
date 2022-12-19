<?php

namespace App\Http\Livewire\Backend\Pages\Cookie;

use App\Models\Cookie;
use Livewire\Component;

class AddCookie extends Component
{
    public $cookietext, $declineBtn ,$acceptBtn;

    public function mount()
    {
     $getcookie  = Cookie::exists();
    
     if($getcookie)
     {
         $notification = array(
             'message' => 'Cookies already exists',
             'alert-type' => 'warning'
         );
          return redirect()->route('admin_view_cookie')->with( $notification);
      }
    }
    public function render()
    {
        return view('livewire.backend.pages.cookie.add-cookie')->layout('layouts.backend');
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

    public function storeCookieText(){
        $this->validate();

                    $data  =   new Cookie();
                    $data->text =    $this->cookietext;
                    $data->accept =    $this->acceptBtn;
                    $data->decline =    $this->declineBtn;
                    $data->save();

                $notification = array(
                        'message' => 'Cookie Text Published',
                        'alert-type' => 'success'
                    );
                 return redirect()->route('admin_view_cookie')->with($notification);

    }                   

}
