<?php

namespace App\Http\Livewire\Backend\Pages\Footer;

use App\Models\FooterContactAddress;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditFooterAddress extends Component
{

    use WithFileUploads;
    public $contactId ,$editHomeBanner,  $telefon ,$fax ,$email ,$address  ,$logo ,$callTo,$mailTo,$WhatsappTo;
    public $newlogo;
    public $address2 ,$telefon2 ,$fax2  ,$email2 ,$permit,$local,$source;
        public function mount($id){
                $this->contactId= $id;
                $this->editHomeBanner = FooterContactAddress::where('id', $this->contactId)->first();
              if($this->contactId){
                $this->name  =  $this->editHomeBanner->name;
                $this->vatid  =  $this->editHomeBanner->vatid;
                $this->telefon  =  $this->editHomeBanner->telefon;
                $this->fax =  $this->editHomeBanner->fax;
                $this->email =  $this->editHomeBanner->email; 
                $this->address = $this->editHomeBanner->address;
                $this->logo = $this->editHomeBanner->logo	;

                $this->telefon2  =  $this->editHomeBanner->telefon2;
                $this->fax2 =  $this->editHomeBanner->fax2;
                $this->email2 =  $this->editHomeBanner->email2; 
                $this->address2 = $this->editHomeBanner->address2;
                
                $this->permit = $this->editHomeBanner->permit;
                $this->local = $this->editHomeBanner->local;
                $this->source = $this->editHomeBanner->source;



                $this->callTo = $this->editHomeBanner->call_to	;
                $this->mailTo = $this->editHomeBanner->mail_to	;
                $this->WhatsappTo = $this->editHomeBanner->Whatsapp_to	;

              }
    
     }
    public function render()
    {
        return view('livewire.backend.pages.footer.edit-footer-address')->layout('layouts.backend');
    }
    protected $rules = [
        'name' => 'required',
        'vatid' => 'required',
        'telefon' => 'required',
        'fax' => 'required',
        'email' => 'required|email',
        'address' => 'required', 
     
    ];

   private function resetInputFields(){
                $this->name = '';
                $this->vatid = '';
                $this->telefon = '';
                $this->fax = '';
                $this->email = '';
                $this->address = '';
                $this->logo = '';
                $this->address2   = '';
                $this->telefon2  = '';
                $this->fax2  = '';
                $this->email2  = '';
                $this->permit  = '';
                $this->local  = '';
                $this->source  = '';  

                $this->callTo = '';
                $this->mail_to = '';
                $this->logWhatsapp_too = '';

                
        }

    public function updateFooterContact(){
        $this->validate();

        if($this->newlogo)  {
            $this->validate([
                'newlogo' => 'required|image|mimes:jpg,png,jpeg,svg,webp|max:2040', 
            ]);
            $fileName = time().'_'.$this->newlogo->getClientOriginalName();
            $filePath = $this->newlogo->storeAs('footer-logo', $fileName, 'public');
            FooterContactAddress::where('id',$this->contactId)->update([
                'logo' =>    $fileName  ?? Null,
                ]);
                    
                $notification = array(
                    'message' => 'Contact logo Updated',
                    'alert-type' => 'info'
                );
                return redirect()->route('footer_address')->with($notification);
    }else 
    {
        FooterContactAddress::where('id',$this->contactId)->update([
            'name' => $this->name,
            'vatid' => $this->vatid,
            'telefon' =>    $this->telefon,
            'fax' =>    $this->fax,
            'email' =>    $this->email,
            'address' =>    $this->address,

            'address2' =>    $this->address2,
            'telefon2' =>    $this->telefon2,
            'email2' =>    $this->email2,
            'fax2' =>    $this->fax2,
            'permit' =>    $this->permit,
            'local' =>    $this->local,
            'source' =>  $this->source,

            'call_to' =>  trim($this->callTo),
            'mail_to' =>  trim($this->mailTo),
            'Whatsapp_to' =>  trim($this->WhatsappTo),


     
            ]);
                 
            $notification = array(
                'message' => 'Contact Address Updated',
                'alert-type' => 'success'
            );
            return redirect()->route('footer_address')->with($notification);
    }
  
    }
}
