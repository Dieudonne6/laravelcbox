<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{use Queueable, SerializesModels;

    public $senderEmail;
    public $entrepriseName;
    public $messageContent;

    /**
     * Create a new message instance.
     *
     * @param  string  $senderEmail
     * @param  string  $messageContent
     * @return void
     */
    public function __construct($senderEmail, $entrepriseName, $messageContent)
    {
        $this->senderEmail = $senderEmail;
        $this->entrepriseName = $entrepriseName;
        $this->messageContent = $messageContent;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->senderEmail)
                    ->subject('Nouveau message de contact')
                    ->view('pages.emails'); // Vue pour le contenu de l'e-mail
    }
}