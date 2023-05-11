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

    // private $content;
    private $html_css;
    private $php;
    private $mysql;
    private $js;
    private $frontendFrameworks;

    private $wordpress;
    private $typo3;

    private $files;
    private $bonusText;
    private $jobapplication;

    //php form addtions 
    private $salary;
    private $availabiltyDate;
    private $frameworks;
    private $gitlab;

    //frontend Dev additions
    private $vuejs;
    private $angular;
    private $react;
    private $uiPrototyping;
    private $designer;

    //typo3 additions
    private $extbaseFluid;
    private $typoscript;
    private $extensionDevelopment;
    private $typo3management;

    //c# dev
    private $cSharp;
    private $dotnet;

    //designer Azubi
    private $pixelbased_imagemanipulation;
    private $vektorbased_imagemanipulation;

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
        $files,
        $bonusText,
        $jobapplication,
        //php addiions
        $salary,
        $availabiltyDate,
        $frameworks,
        $gitlab,
        //frontendDev additions
        $vuejs,
        $angular,
        $react,
        $uiPrototyping,
        $designer,
        //typo3 additions
        $extbaseFluid,
        $typoscript,
        $extensionDevelopment,
        $typo3management,
        //c# dev
        $cSharp,
        $dotnet,
        //Designer azubi
        $pixelbased_imagemanipulation,
        $vektorbased_imagemanipulation
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
        $this->files = $files;
        $this->bonusText = $bonusText;
        $this->jobapplication = $jobapplication;
        //php additions
        $this->salary = $salary;
        $this->availabiltyDate = $availabiltyDate;
        $this->frameworks = $frameworks;
        $this->gitlab = $gitlab;
        //fronteddev additions
        $this->vuejs = $vuejs;
        $this->angular = $angular;
        $this->react = $react;
        $this->uiPrototyping = $uiPrototyping;
        $this->designer = $designer;
        //typo3 additions
        $this->extbaseFluid = $extbaseFluid;
        $this->typoscript = $typoscript;
        $this->extensionDevelopment = $extensionDevelopment;
        $this->typo3management = $typo3management;
        //c# dev
        $this->cSharp =$cSharp;
        $this->dotnet = $dotnet;
        //desinger azubi
        $this->pixelbased_imagemanipulation = $pixelbased_imagemanipulation;
        $this->vektorbased_imagemanipulation = $vektorbased_imagemanipulation;
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
                'jobapplication' => $this->jobapplication,
                //php additions
                'salary' => $this->salary,
                'availabilityDate' => $this->availabiltyDate,
                'frameworks' => $this->frameworks,
                'gitlab' => $this->gitlab,
                //frontend dev additions
                'vuejs' => $this->vuejs,
                'angular' => $this->angular,
                'react' => $this->react,
                'uiPrototyping' => $this->uiPrototyping,
                'designer' => $this->designer,
                //typo3 additions
                'extbaseFluid' => $this->extbaseFluid,
                'typoscript' => $this->typoscript,
                'extensionDevelopment' => $this->extensionDevelopment,
                'typo3management' => $this->typo3management,
                //c# dev
                'cSharp' => $this->cSharp,
                'dotnet' => $this->dotnet,
                //designer azubi
                'pixelbased_imagemanipulation' => $this->pixelbased_imagemanipulation,
                'vektorbased_imagemanipulation' => $this->vektorbased_imagemanipulation
            ],
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments()
    {   
        $attachments = [];
        foreach($this->files as $file){
            $attachments[] = Attachment::fromPath($file->path())
            ->as($file->getClientOriginalName())
            ->withMime($file->getClientMimeType());
        }
        return $attachments;
    }
}
