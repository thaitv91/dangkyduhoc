<?php

namespace App\Listeners;

use App\Events\SendMessage;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use DB;
use Carbon\Carbon;

class MessageListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  SendMessage  $event
     * @return void
     */
    public function handle(SendMessage $event)
    {
        $data = array(
            'time'      =>  $event->time,
            'message'   =>  $event->message,
            'send_from' =>  $event->send_from,
            'send_to'   =>  $event->send_to,
            'created_at'=>  Carbon::now(),
            'updated_at'=>  Carbon::now(),
        );

        DB::table('messages')->insert($data);
    }
}
