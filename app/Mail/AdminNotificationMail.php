<?php

namespace App\Mail;

use App\Models\student;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;


class AdminNotificationMail extends Mailable
{
    use Queueable, SerializesModels;
    public $action;
    public $model;
    /**
     * Create a new message instance.
     */
    public function __construct($model, $action = 'added')
    {
        $this->model = $model;
        $this->action = $action;
    }


    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        $entity = $this->model instanceof student ? 'Student' : 'Teacher';
        $subject = $this->action === 'deleted' ? "$entity Deleted" : "New $entity Registered";
        return new Envelope(
            subject: $subject,
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail.admin-notification-mail',
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

    public function build()
    {
        return $this->markdown('mail.admin-notification-mail')->with(['model' => $this->model, 'action' => $this->action,]);
    }
}
