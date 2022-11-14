<?php

namespace App\Http\Livewire\Backend\Pages\Footer;

use App\Models\FooterContactAddress;
use App\Models\SociaCategory;
use Livewire\Component;
use Livewire\WithFileUploads;
class AddFooterAddress extends Component
{
    use WithFileUploads;
public $telefon ,$fax ,$email ,$address  ,$logo;



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
        'telefon' => 'required',
        'fax' => 'required',
        'email' => 'required|email',
        'address' => 'required', 
        'logo' => 'required|image|mimes:jpg,png,jpeg,svg,webp|max:2040', 
    ];

   private function resetInputFields(){
            $this->telefon = '';
            $this->fax = '';
            $this->email = '';
            $this->address = '';
            $this->logo = '';
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
            'telefon' =>    $this->telefon,
            'fax' =>    $this->fax,
            'email' =>    $this->email,
            'address' =>    $this->address,
            'logo' =>    $fileName  ?? Null,
    

            ]);
            $notification = array(
                'message' => 'Contact Address Published',
                'alert-type' => 'success'
            );
            return redirect()->route('footer_address')->with($notification);
    }
}
