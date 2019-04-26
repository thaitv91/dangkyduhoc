<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Mail;
use App\Mail\AssessmentApply as AssessmentApply;
use App\Mail\AssessmentNotification as AssessmentNotification;

class SendMail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $email;
    public $tries = 3;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($email)
    {
        $this->email = $email;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $email = $this->email;
        $admin_email = 'dkduhoc@gmail.com';

        $configure = \App\Models\Configure::first();
        
        if (isset($configure)) {
            $admin_email = $configure->admin_email;
        }

        Mail::to($email)->send(new AssessmentApply($email));
        Mail::to($admin_email)->send(new AssessmentNotification($email));
    }
}
