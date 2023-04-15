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
    private $firstname;
    private $lastname;
    private $email;
    private $phone;

    private $content;

    private $html_css;
    private $php;
    private $mysql;
    private $js;
    private $frontendFrameworks;

    private $wordpress;
    private $typo3;

    private $file; 
    private $bonusText;
    private $jobapplication;
    /**
     * Create a new message instance.
     */
    //add name var 
    public function __construct(
        $firstname,
        $lastname,
        $email,
        $phone,

        $html_css,
        $php,
        $mysql,
        $js,

        $frontendFrameworks,

        $wordpress,
        $typo3,

        $file, 
        $bonusText,

        $jobapplication

    ) {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->email = $email;
        $this->phone = $phone;

        $this->html_css = $html_css;
        $this->php = $php;
        $this->mysql = $mysql;
        $this->js = $js;

        $this->frontendFrameworks = $frontendFrameworks;

        $this->wordpress = $wordpress;
        $this->typo3 = $typo3;

        $this->file = $file;
        $this->bonusText = $bonusText;

        $this->jobapplication = $jobapplication;
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
            with: [
                
                'firstname' => $this->firstname,
                'lastname' => $this->lastname,
                'email' => $this->email,
                'phone' => $this->phone,

                'html_css' => $this->html_css,
                'php' => $this->php,
                'mysql' => $this->mysql,
                'js' => $this->js,

                'frontendFrameworks' => $this->frontendFrameworks,

                'wordpress' => $this->wordpress,
                'typo3' => $this->typo3,

                'bonusText' => $this->bonusText,

                'jobapplication' => $this->jobapplication
            ],
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
                ->as($this->file->getClientOriginalName())
                ->withMime($this->file->getClientMimeType())
        ];
    }
}
