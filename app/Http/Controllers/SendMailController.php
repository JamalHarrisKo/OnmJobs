<?php

namespace App\Http\Controllers;

use App\Http\Requests\SendMailRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Mail\Attachment;
use App\Mail\ApplicationMail;
use Illuminate\Http\RedirectResponse;

class SendMailController extends Controller
{
    public function sendmail(SendMailRequest $request)
    {
        // var_dump($request->file);exit;
        // $name = $_POST['name'];
        // $content = $_POST['text'];
 
        // $file = $request->file;
        // $request->validate([
        //     'name' => 'required',
        //     'text' => 'required',
        //     'file' => 'required'
        // ]);
        // send the email
      
        $validated = $request->validated();
        
        //set in conf
        $to_email = "i@onm.de";
        Mail::to($to_email)->send(new ApplicationMail($validated['name'], $validated['text'], $validated['file']));
        return redirect()->back();
    }

    //The email sending is done using the to method on the Mail facade
    //Mail::to('test@onm.de')->send(new ApplicationMail($name, $content));
}
