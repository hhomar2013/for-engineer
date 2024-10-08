<?php

namespace App\Mail;

use App\Models\service_provider_reservation;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class CompanyMail extends Mailable
{
    use Queueable, SerializesModels;
    public $spa ;
    /**
     * Create a new message instance.
     */
    public function __construct(service_provider_reservation $spa)
    {
        $this->spa = $spa;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: __('Mail to service providers'),
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        $url = "https://for-engineer.com/ar/company";
        return new Content(
            markdown: 'emails.companies',
            with:[
                'url' =>$url,
            ]

        );
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
