<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class BecomeRevisor extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */

    public $user;
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function build()
    {
        return $this->from('admin@mercatodo.com');
    }

    public function envelope(): Envelope 
    {
        return new Envelope(
            subject: 'Become Revisor',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'mail.become_revisor',
        );
    }

    public function attachment(): array
    {
        return [];
    } 
}