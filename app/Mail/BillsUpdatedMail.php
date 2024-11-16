<?php

namespace App\Mail;

use App\Models\Tenant;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class BillsUpdatedMail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(public Tenant $tenant)
    {
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Bills Updated Notification',
        );
    }

    public function content(): Content
    {
        return new Content(
            markdown: 'emails.bills-updated',
            with: [
                'tenant' => $this->tenant,
                'amount' => $this->tenant->monthly_payment,
                'dueDate' => $this->tenant->lease_due,
            ],
        );
    }
}