<?php

namespace App\Mail;
use App\Teacher;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Welcome extends Mailable
{
    use Queueable, SerializesModels;

    public $message;
    public $teacher_name;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($message,$teacher_name)
    {
        $this->message=$message;
        $this->teacher_name=$teacher_name;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('ssadullaev1999@gmail.com')->markdown('emails.welcome',[$this->teacher_name,$this->message]);
    }
}
