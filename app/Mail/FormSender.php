<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class FormSender extends Mailable
{
    use Queueable, SerializesModels;
   public $full_name;
   public $email;
   public $subject;
   public $message;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($full_name,$email,$subject,$message)
    {
        $this->full_name=$full_name;
        $this->email=$email;
        $this->subject=$subject;
        $this->message=$message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
    return $this->from('ssadullaev1999@gmail.com')->markdown('emails.contact',
        [$this->full_name, $this->email,$this->subject, $this->message]);

          
       
    }
}
