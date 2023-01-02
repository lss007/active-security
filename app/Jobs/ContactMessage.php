<?php

namespace App\Jobs;

use App\Mail\Clientmail;
use App\Models\Contact;
use App\Models\FooterContactAddress;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class ContactMessage implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    protected $sendmessage;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($sendmessage)
    {
        //
        $this->sendmessage = $sendmessage;

    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        //
      $geteamail=   FooterContactAddress::first();

    $admin_mail = $geteamail->email ?? 'kontakt@active-sec.de';
   
        $email = new Clientmail( $this->sendmessage );
        Mail::to($admin_mail)->send($email);

    }
}
