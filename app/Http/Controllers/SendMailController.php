<?php

namespace App\Http\Controllers;

use App\Http\Requests\SendMailRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Mail\Attachment;
use App\Mail\ApplicationMail;
use Illuminate\Http\RedirectResponse;
use PHPUnit\Framework\MockObject\Rule\Parameters;

class SendMailController extends Controller
{
    public function sendmail(Request $request)
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
        // dd($request->request);



        // $validated = $request->validated();

            // dd($request);
        //set in conf
        $to_email = "i@onm.de";
        Mail::to($to_email)->send(new ApplicationMail(
            $request->input('firstname'),
            $request->input('lastname'),
            $request->input('email'),
            $request->input('phone'),

            $request->input('html_css'),
            $request->input('php'),
            $request->input('mysql'),
            $request->input('js'),

            $request->input('frontendFrameworks'),

            $request->input('wordpress'),
            $request->input('typo3'),

            $request->file('file'), 
            $request->input('bonusText'),

            $request->input('jobapplication')

        ));
        return redirect('/')->withErrors(['msg' => 'The Message']);
    }

    //The email sending is done using the to method on the Mail facade
    //Mail::to('test@onm.de')->send(new ApplicationMail($name, $content));
}
