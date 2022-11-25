<?php

namespace App\Http\Livewire\Frontend;

use App\Jobs\ContactMessage;
use App\Models\AllPagesBanner;
use App\Models\Contact as ModelsContact;
use App\Models\ContactSection;
use Carbon\Carbon;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class Contact extends Component
{

public $surname, $email, $regarding, $client_message  ,$Contactmain ,$getContactSection;

public function render()
{

    $this->Contactmain       =   AllPagesBanner::where('cat_id' ,12)->where('status',1)->first();
    $this->getContactSection =   ContactSection::where('status',1)->first();

    return view('livewire.frontend.contact')->layout('layouts.frontend');
}
    protected $rules = [
        'surname' => 'required',
        'email' => 'required|email',
        'regarding' => 'required',
        'client_message' => 'required', 
    ];

    protected $messages = [
      'surname.required' => 'Surname Required.',
      'email.required' => 'Email Required.',
      'regarding.required' => 'Subject Required.',
      'client_message.required' => 'Message Required.',
    ];
   private function resetInputFields(){
        $this->surname = '';
        $this->email = '';
        $this->regarding = '';
        $this->client_message = '';
    
  
}
public function sendmessage()
{  
        
     $this->validate();
        $sendmessage = ModelsContact::create([
                    'surname' =>   $this->surname,
                    'email' => $this->email,
                    'regarding' => $this->regarding,
                    'client_message' => $this->client_message,
                    'created_at' => Carbon::now(),
                ]);
        // if($sendmessage ){  
        //     dispatch(new ContactMessage( $sendmessage));     
        //     $notification = array(
        //         'message' => 'Message send successfully',
        //         'alert-type' => 'success'
        //     );
        //         return redirect('/')->with($notification); 
        //     }
        $notification = array(
            'message' => 'Nachricht erfolgreich gesendet',
            'alert-type' => 'success'
        );
            return redirect('/')->with($notification);
                $this->resetInputFields();  
    }
 
}
