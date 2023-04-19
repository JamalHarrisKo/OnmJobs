<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Support\Facades\Mail;
use App\Mail\ApplicationMail;
use Illuminate\Http\UploadedFile;
class MailTest extends TestCase
{
    /**
     * Test Email
     */
    public function test_Mail(): void
    {
        Mail::fake();
        $pdfData = UploadedFile::fake()->create('fake.pdf');
        $to_email = "i@onm.de";
        $mailable = new ApplicationMail(
            'Testfirstname',
            'Testlastname',
            'Testemail',
            'Testphone',
            'Testhtml_css',
            'Testphp',
            'Testmysql',
            'Testjs',
            'TestfrontendFrameworks',
            'Testwordpress',
            'Testtypo3',
            $pdfData,
            'TestbonusText',
            'Testjobapplication'
        );
        Mail::to($to_email)->send($mailable);
        $mailable->assertTo('i@onm.de');
        $mailable->assertSeeInOrderInHtml([
            'Testjobapplication',
            'Testfirstname',
            'Testlastname',
            'Testemail', 'Testphone',
            'Testhtml_css',
            'Testphp',
            'Testmysql',
            'Testjs',
            'TestfrontendFrameworks',
            'Testwordpress',
            'Testtypo3',
            'TestbonusText'
        ]);
    }
}
