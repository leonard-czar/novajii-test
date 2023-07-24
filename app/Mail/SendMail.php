<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;
    public $email_info;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($email_info)
    {
        //
        return $this->email_info = $email_info;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Confirmation Mail')->view('email._email');
    }
}
