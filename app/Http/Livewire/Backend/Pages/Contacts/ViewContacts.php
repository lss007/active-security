<?php

namespace App\Http\Livewire\Backend\Pages\Contacts;

use App\Models\Contact;
use Livewire\Component;

class ViewContacts extends Component
{
    public $getContacts;
    public function render()
    {
            $this->getContacts=   Contact::get();
        return view('livewire.backend.pages.contacts.view-contacts')->layout('layouts.backend');
    }

    public function delete($id){
        
        Contact::destroy($id);
        $notification = array(
           'message' => 'Contact Deleted successfully',
           'alert-type' => 'error'
       );
       return   redirect(request()->header('Referer'))->with($notification);
       }
}
