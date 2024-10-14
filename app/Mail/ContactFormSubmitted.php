<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactFormSubmitted extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $email;
    public $messageContent;

    public function __construct($name, $email, $message)
    {
        $this->name = $name;
        $this->email = $email;
        $this->messageContent = $message;
    }

    public function build()
    {
        return $this->subject('Nouveau message de contact')
                    ->view('emails.contact-form-submitted');
    }
}