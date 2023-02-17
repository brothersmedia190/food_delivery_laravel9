<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class Reservation extends Mailable
{
    use Queueable, SerializesModels;
    public $data;
 
    public function __construct($data)
    {
        $this->data = $data;
    }

    public function build()
    {
        return $this->view('mail.reserve')->subject('Hot food reservation');
    }
 
    public function envelope()
    {
        return new Envelope(
            subject: 'Reservation',
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
   
    public function attachments()
    {
        return [];
    }
}
