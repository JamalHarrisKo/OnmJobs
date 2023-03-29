<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Attachment;



// Envelope – Returns the Illuminate\Mail\Mailables\Envelope object, which defines the subject and the recipients.
// Content –  Returns the Illuminate\Mail\Mailables\Content object, which defines the Blade template used to generate message content.
// Attachments – Returns an array of attachments.
class ApplicationMail extends Mailable
{
    use Queueable, SerializesModels;
    // protected $data;
    private $name;
    private $content;
    public $file;
    /**
     * Create a new message instance.
     */
    //add name var 
    public function __construct($name, $content, $file)
    {
        //
        $this->name = $name;
        $this->content = $content;

        $this->file = $file;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            // from: new Address('info@onm.de', 'ONM Jobs'),
            // subject: 'Application Mail',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
             view: 'mail.email',
             with: ['name' => $this->name, 'content' => $this->content],

        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    { 
        return [
            Attachment::fromPath($this->file->path())
            // ->as($this->file->getClientOriginalName())
            // ->withMime($this->file->getClientMimeType())
        ];
    }

}
