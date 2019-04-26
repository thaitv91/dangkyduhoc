<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactEmail extends Mailable
{
    use Queueable, SerializesModels;
    protected $data;
    protected $email;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($email, $data)
    {
        $this->email = $email;
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $url = $this->data['url'];
        $email = $this->email;

        return $this->view('email.contact', compact(['url', 'email']));
    }
}
