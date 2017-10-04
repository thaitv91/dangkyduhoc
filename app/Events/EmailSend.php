<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class EmailSend
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $data;
    public $email;
    public $email_to;

    public function __construct($email_to, $email, $data)
    {
        $this->data = $data;
        $this->email = $email;
        $this->email_to = $email_to;
    }
}
