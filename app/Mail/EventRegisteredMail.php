<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class EventRegisteredMail extends Mailable
{
    use Queueable, SerializesModels;

    public $eventData;

    public function __construct($eventData)
    {
        $this->eventData = $eventData;
    }

    public function build()
    {
        return $this->view('frontend.emailtemplate.eventregistered');
    }
}