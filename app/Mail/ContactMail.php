<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public function __construct($ime, $telefon, $email, $text)
    {
        $this->ime = $ime;
        $this->telefon = $telefon;
        $this->email = $email;
        $this->text = $text;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address($this->email, $this->ime),
            subject: 'Nova poruka sa sajta',
        );
    }

    /**
     * Get the message content definition.
     */

    public function build()
    {
        return $this
            ->subject('Nova kontakt poruka sa sajta')
            ->view('emails.contact-mail')
            ->with([
                'ime' => $this->ime,
                'telefon' => $this->telefon,
                'email' => $this->email,
                'text' => $this->text,
            ]);
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
