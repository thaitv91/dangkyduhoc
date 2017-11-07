<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ReplyContact extends Mailable
{
    use Queueable, SerializesModels;

    protected $name;
    protected $question;
    protected $answer;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $question, $answer)
    {
        $this->name = $name;
        $this->question = $question;
        $this->answer = $answer;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $name = $this->name;
        $question = $this->question;
        $answer = $this->answer;

        return $this->view('email.contact_reply', compact(['name', 'question', 'answer']));
    }
}
