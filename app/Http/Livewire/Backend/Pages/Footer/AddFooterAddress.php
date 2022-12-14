<?php

namespace App\Http\Livewire\Backend\Pages\Footer;

use App\Models\FooterContactAddress;
use App\Models\SociaCategory;
use Livewire\Component;
use Livewire\WithFileUploads;
class AddFooterAddress extends Component
{
    use WithFileUploads;
public $telefon ,$fax ,$email ,$address  ,$logo ,$name ,$vatid,$callTo,$mailTo,$WhatsappTo;

public $address2 ,$telefon2 ,$fax2  ,$email2 ,$permit,$local,$source;

    public function render()
    {
        return view('livewire.backend.pages.footer.add-footer-address')->layout('layouts.backend');
    }

    public function mount()
    {
     $getSection1  = FooterContactAddress::exists();
     if($getSection1)
     {
         $notification = array(
             'message' => 'Address already exists',
             'alert-type' => 'warning'
         );
          return redirect()->route('footer_address')->with( $notification);
      }
    }
    protected $rules = [
        'name' => 'required',
        'vatid' => 'required',
        'telefon' => 'required',
        'fax' => 'required',
        'email' => 'required|email',
        'address' => 'required', 
        'logo' => 'required|image|mimes:jpg,png,jpeg,svg,webp|max:2040', 
    ];

   private function resetInputFields(){
            $this->name = '';
            $this->vatid = '';
            $this->telefon = '';
            $this->fax = '';
            $this->email = '';
            $this->address = '';
            $this->logo = '';
            $this->callTo = '';
            $this->mail_to = '';
            $this->logWhatsapp_too = '';
            
            $this->address2   = '';
            $this->telefon2  = '';
            $this->fax2  = '';
            $this->email2  = '';
            $this->permit  = '';
            $this->local  = '';
            $this->source  = '';     
        }


    public function storeFooterContact(){
        $this->validate();
        if($this->logo)  {
            $this->validate([
                'logo' => 'required|image|mimes:jpg,png,jpeg,svg,webp|max:2040', 
            ]);
            $fileName = time().'_'.$this->logo->getClientOriginalName();
            $filePath = $this->logo->storeAs('footer-logo', $fileName, 'public');
    }
             FooterContactAddress::create([
                'name' => $this->name,
                'vatid' => $this->vatid,
                'telefon' =>    $this->telefon,
                'fax' =>    $this->fax,
                'email' =>    $this->email,
                'address' =>    $this->address,
                'logo' =>    $fileName  ?? Null,
                'call_to' =>  trim($this->callTo),
                'mail_to' =>  trim($this->mailTo),
                'Whatsapp_to' =>  trim($this->WhatsappTo),

                'address2' =>    $this->address2,
                'telefon' =>    $this->telefon2,
                'email2' =>    $this->email2,
                'fax2' =>    $this->fax2,
                'permit' =>    $this->permit,
                'local' =>    $this->local,
                'source' =>  $this->source,


            ]);
            $notification = array(
                'message' => 'Contact Address Published',
                'alert-type' => 'success'
            );
            return redirect()->route('footer_address')->with($notification);
    }
}
