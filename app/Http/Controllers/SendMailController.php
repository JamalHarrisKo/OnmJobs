<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Mail\Attachment;


class SendMailController extends Controller
{
    public function sendmail(Request $request)
    {


    }
    //next step: Get these from forms :)


//The email sending is done using the to method on the Mail facade
    // Mail::to('test@onm.de')->send(new ApplicationMail($name, $content));
}