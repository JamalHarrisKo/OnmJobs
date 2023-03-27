<?php

use App\Http\Controllers\SendMailController;
use Illuminate\Support\Facades\Route;
//email 
use Illuminate\Support\Facades\Mail;
use App\Mail\ApplicationMail;
// use GuzzleHttp\Psr7\Request;
use Illuminate\Console\Application;
use Illuminate\Http\Request;


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

Route::get('/', function () {
    //route to vue js application
    return view('app');
});

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

//The email sending is done using the to method on the Mail facade
    Mail::to('test@onm.de')->send(new ApplicationMail($name, $content, $attachments));
});

//solve using controller

// Route::post('/sendmail', 'SendMailController@sendmail');

//https://www.wpoven.com/tools/free-smtp-server-for-testing# mailing check