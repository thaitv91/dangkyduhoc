<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ApplyCourse extends Mailable
{
    use Queueable, SerializesModels;

    protected $user;
    protected $country_birth;
    protected $nationality;
    protected $qualification;
    protected $certificate;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->user = $data['user'];
        $this->country_birth = $data['country_birth'];
        $this->nationality = $data['nationality'];
        $this->qualification = $data['qualification'];
        $this->certificate = $data['certificate'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $user = $this->user;
        $country_birth = $this->country_birth;
        $nationality = $this->nationality;
        $qualification = $this->qualification;
        $certificate = $this->certificate;

        return $this->view('email.apply_course', compact(['user', 'country_birth', 'nationality', 'qualification', 'certificate']));
    }
}
