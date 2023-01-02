<?php

namespace App\Mail;

use App\Models\FooterContactAddress;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class Clientmail extends Mailable
{
    use Queueable, SerializesModels;
    protected $sendmessage;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($sendmessage)
    {
        //
        $this->sendmessage = $sendmessage;
    }


    public function build()
    {
        // $geteamail=   FooterContactAddress::first();
        return $this->subject($this->sendmessage->surname.' Message')
        ->view('email.clientemail')->with([
            'surname' => $this->sendmessage->surname,
            // 'admin' => $geteamail->name,
            'email' => $this->sendmessage->email,
            'regarding' => $this->sendmessage->regarding,
            'client_message' => $this->sendmessage->client_message, 
            
        ]);
    }

    // /**
    //  * Get the message envelope.
    //  *
    //  * @return \Illuminate\Mail\Mailables\Envelope
    //  */
    // public function envelope()
    // {
    //     return new Envelope(
    //         subject: 'Clientmail',
    //     );
    // }

    // /**
    //  * Get the message content definition.
    //  *
    //  * @return \Illuminate\Mail\Mailables\Content
    //  */
    // public function content()
    // {
    //     return new Content(
    //         view: 'view.clientemail',
    //     );
    // }

    // /**
    //  * Get the attachments for the message.
    //  *
    //  * @return array
    //  */
    // public function attachments()
    // {
    //     return [];
    // }
}
