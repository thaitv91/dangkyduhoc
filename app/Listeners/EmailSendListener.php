<?php

namespace App\Listeners;

use App\Events\EmailSend;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Mail\ContactEmail;
use Mail;

class EmailSendListener
{

    public function handle(EmailSend $event)
    {
        $email_to = $event->email_to;
        $email = $event->email;
        $data = $event->data;

        Mail::to($email_to)->send(new ContactEmail($email, $data));
    }
}
