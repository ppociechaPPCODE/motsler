<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactFormMail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(
        public string $replyEmail,
        public ?string $phone,
        public string $messageBody,
    ) {}

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: (string) __('contact.mail_subject'),
            replyTo: [
                new Address($this->replyEmail),
            ],
        );
    }

    public function content(): Content
    {
        return new Content(
            html: 'emails.contact-form',
        );
    }
}
