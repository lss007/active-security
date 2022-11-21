<?php

namespace App\Jobs;

use App\Mail\Clientmail;
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
        $email = new Clientmail( $this->sendmessage );
        Mail::to('active_security@yopmail.com')->send($email);

    }
}
