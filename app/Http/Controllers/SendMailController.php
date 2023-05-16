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
    public function sendmail(SendMailRequest $request)
    {
        //care: NEED some sort of validation in order to be passed
        // dd($request);
        $rules = []; 
        if ($request->has('jobapplication')) {
            $rules = array_merge($rules, ['jobapplication' => 'required']);
        };
        if ($request->has('phone')) {
            $rules = array_merge($rules, ['phone' => 'required|regex:/^[0-9\s]*$/']);
        };
        if ($request->has('email')) {
            $rules = array_merge($rules, ['email' => 'required|email']);
        };
        if ($request->has('lastname')) {
            $rules = array_merge($rules, ['lastname' => 'required']);
        };
        if ($request->has('firstname')) {
            $rules = array_merge($rules, ['firstname' => 'required']);
        };
        if ($request->has('file')) {
            $rules = array_merge($rules, ['file' => 'required|file|mimes:pdf']);
        };
        //additional files
        if ($request->has('file2')) {
            $rules = array_merge($rules, ['file2' => 'file|mimes:pdf']);
        };
        if ($request->has('file3')) {
            $rules = array_merge($rules, ['file3' => 'file|mimes:pdf']);
        };
        if ($request->has('file4')) {
            $rules = array_merge($rules, ['file4' => 'file|mimes:pdf']);
        };
        if ($request->has('file5')) {
            $rules = array_merge($rules, ['file5' => 'file|mimes:pdf']);
        };
        if ($request->has('html_css')) {
            $rules = array_merge($rules, ['html_css' => 'required']);
        };
        if ($request->has('bonusText')) {
            // rule for testing
            // $rules = array_merge($rules, ['bonusText' => 'required']);
        };
        if ($request->has('php')) {
            $rules = array_merge($rules, ['php' => 'required']);
        };
        if ($request->has('mysql')) {
            $rules = array_merge($rules, ['mysql' => 'required']);
        };
        if ($request->has('js')) {
            $rules = array_merge($rules, ['js' => 'required']);
        };
        if ($request->has('frontendFrameworks')) {
            $rules = array_merge($rules, ['frontendFrameworks' => 'required']);
        };
        if ($request->has('wordpress')) {
            $rules = array_merge($rules, ['wordpress' => 'required']);
        };
        if ($request->has('typo3')) {
            $rules = array_merge($rules, ['typo3' => 'required']);
        };
        if ($request->has('salary')) {
            $rules = array_merge($rules, ['salary' => 'required|regex:/^[0-9\s]*$/']);
        };
        if ($request->has('availabilityDate')) {
            $rules = array_merge($rules, ['availabilityDate' => 'required']);
        };
        if ($request->has('frameworks')) {
            $rules = array_merge($rules, ['frameworks' => 'required']);
        };
        if ($request->has('gitlab')) {
            $rules = array_merge($rules, ['gitlab' => 'required']);
        };
        //frontenddev
        if ($request->has('vuejs')) {
            $rules = array_merge($rules, ['vuejs' => 'required']);
        };
        if ($request->has('angular')) {
            $rules = array_merge($rules, ['angular' => 'required']);
        };
        if ($request->has('react')) {
            $rules = array_merge($rules, ['react' => 'required']);
        };
        if ($request->has('uiPrototyping')) {
            $rules = array_merge($rules, ['uiPrototyping' => 'required']);
        };
        if ($request->has('designer')) {
            $rules = array_merge($rules, ['designer' => 'required']);
        };
        if ($request->has('extbaseFluid')) {
            $rules = array_merge($rules, ['extbaseFluid' => 'required']);
        };
        if ($request->has('typoscript')) {
            $rules = array_merge($rules, ['typoscript' => 'required']);
        };
        if ($request->has('extensionDevelopment')) {
            $rules = array_merge($rules, ['extensionDevelopment' => 'required']);
        };
        if ($request->has('typo3management')) {
            $rules = array_merge($rules, ['typo3management' => 'required']);
        };
        if ($request->has('cSharp')) {
            $rules = array_merge($rules, ['cSharp' => 'required']);
        };
        if ($request->has('dotnet')) {
            $rules = array_merge($rules, ['dotnet' => 'required']);
        };
        if ($request->has('pixelbased_imagemanipulation')) {
            $rules = array_merge($rules, ['pixelbased_imagemanipulation' => 'required']);
        };
        if ($request->has('vektorbased_imagemanipulation')) {
            $rules = array_merge($rules, ['vektorbased_imagemanipulation' => 'required']);
        };
        //Backend Validation for Form (sendMailRequest)
        $validatedData = $request->validate(
            $rules,
            [
                'firstname.required' => '"Vorname" ist ein Pflichfeld',
                'lastname.required' => '"Nachname" ist ein Pflichfeld',
                'email.required' => '"email" ist ein Pflichfeld',
                'phone.required' => '"Telefonnummer" ist ein Pflichfeld',
                'html_css.required' => '"HTML & CSS" ist ein Pflichfeld',
                'php.required' => '"PHP" ist ein Pflichfeld',
                'mysql.required' => '"MySQL" ist ein Pflichfeld',
                'js.required' => '"JavaScript" ist ein Pflichfeld',
                'frontendFrameworks.required' => '"Frontend-Frameworks" ist ein Pflichfeld',
                'wordpress.required' => '"Wordpress" ist ein Pflichfeld',
                'typo3.required' => '"Typo3" ist ein Pflichfeld',
                'file.required' => 'Bitte Dokumente zum Upload bereitstellen',
                'file.mimes' => 'Bitte Dokumente im PDF Format zum Upload bereitstellen',
                //additional files
                'file2.mimes' => 'Bitte Dokumente im PDF Format zum Upload bereitstellen',
                'file3.mimes' => 'Bitte Dokumente im PDF Format zum Upload bereitstellen',
                'file4.mimes' => 'Bitte Dokumente im PDF Format zum Upload bereitstellen',
                'file5.mimes' => 'Bitte Dokumente im PDF Format zum Upload bereitstellen'

            ]
        );

        //set in conf
        $to_email = env('MAIL_TO');

        Mail::to($to_email)->send(new ApplicationMail(

            (isset($validatedData['firstname'])) ? $validatedData['firstname'] : '',
            (isset($validatedData['lastname'])) ? $validatedData['lastname'] : '',
            (isset($validatedData['email'])) ? $validatedData['email'] : '',
            (isset($validatedData['phone'])) ? $validatedData['phone'] : '',

            (isset($validatedData['html_css'])) ? $validatedData['html_css'] : '',
            (isset($validatedData['php'])) ? $validatedData['php'] : '',
            (isset($validatedData['mysql'])) ? $validatedData['mysql'] : '',
            (isset($validatedData['js'])) ? $validatedData['js'] : '',

            (isset($validatedData['frontendFrameworks'])) ? $validatedData['frontendFrameworks'] : '',
            (isset($validatedData['wordpress'])) ? $validatedData['wordpress'] : '',
            (isset($validatedData['typo3'])) ? $validatedData['typo3'] : '',
            (isset($validatedData['file'])) ? $validatedData['file'] : '',
            //additional files
            (isset($validatedData['file2'])) ? $validatedData['file2'] : '',
            (isset($validatedData['file3'])) ? $validatedData['file3'] : '',
            (isset($validatedData['file4'])) ? $validatedData['file4'] : '',
            (isset($validatedData['file5'])) ? $validatedData['file5'] : '',

            (isset($validatedData['bonusText'])) ? $validatedData['bonusText'] : '',
            (isset($validatedData['jobapplication'])) ? $validatedData['jobapplication'] : '',

            //php additions
            (isset($validatedData['salary'])) ? $validatedData['salary'] : '',
            (isset($validatedData['availabilityDate'])) ? $validatedData['availabilityDate'] : '',
            (isset($validatedData['frameworks'])) ? $validatedData['frameworks'] : '',
            (isset($validatedData['gitlab'])) ? $validatedData['gitlab'] : '',

            //frontenddev additions
            (isset($validatedData['vuejs'])) ? $validatedData['vuejs'] : '',
            (isset($validatedData['angular'])) ? $validatedData['angular'] : '',
            (isset($validatedData['react'])) ? $validatedData['react'] : '',
            (isset($validatedData['uiPrototyping'])) ? $validatedData['uiPrototyping'] : '',
            (isset($validatedData['designer'])) ? $validatedData['designer'] : '',

            //typo3 additions
            (isset($validatedData['extbaseFluid'])) ? $validatedData['extbaseFluid'] : '',
            (isset($validatedData['typoscript'])) ? $validatedData['typoscript'] : '',
            (isset($validatedData['extensionDevelopment'])) ? $validatedData['extensionDevelopment'] : '',
            (isset($validatedData['typo3management'])) ? $validatedData['typo3management'] : '',

            //c# additions
            (isset($validatedData['cSharp'])) ? $validatedData['cSharp'] : '',
            (isset($validatedData['dotnet'])) ? $validatedData['dotnet'] : '',

            //desinger azubi
            (isset($validatedData['pixelbased_imagemanipulation'])) ? $validatedData['pixelbased_imagemanipulation'] : '',
            (isset($validatedData['vektorbased_imagemanipulation'])) ? $validatedData['vektorbased_imagemanipulation'] : '',

        ));

        // return redirect('/')->withErrors(['msg' => 'Danke für deine Bewerbung bei ONM, wir werden deine Unterlagen prüfen und uns in kürze Zurückmelden']);

        return redirect('/');
        // return redirect('/')->withErrors(['msg' => 'The Message']);
    }
}
