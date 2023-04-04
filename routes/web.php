<?php

use App\Http\Controllers\SendMailController;
use Illuminate\Support\Facades\Route;
//email 
use Illuminate\Support\Facades\Mail;
use App\Mail\ApplicationMail;
// use GuzzleHttp\Psr7\Request;
use Illuminate\Console\Application;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//use controller to send form errors with request
Route::get('/{id}', function ($id) {
    //route to vue js application
    return view('app');
});

// Route::get('/', [Controller::class, 'getPHPVars']);

//add route/controller action for sending an email
// Route::get('/sendmail', function () {
//     //route to vue js application
//     return view('welcome');
// });


//sending emails
Route::post('/testroute', function(Request $request) {
    //next step: Get these from forms :)
    $name = "ONM Jobs";
    $content ="email content";
    $name = $_POST['name'];
    $attachments = $_FILES; 
    // $attachments = public_path('favicon.ico');
    // var_dump($attachments);exit;
    // var_dump($attachments['file']['full_path']);exit;

//The email sending is done using the to method on the Mail facade
    Mail::to('test@onm.de')->send(new ApplicationMail($name, $content, $attachments));
    //->attach($attachments['file']['full_path']);
});

//solve using controller

// Route::post('/sendmail', 'SendMailController@sendmail');

//https://www.wpoven.com/tools/free-smtp-server-for-testing# mailing check


Route::post('/sendApplication', [SendMailController::class, 'sendmail']);