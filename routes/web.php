<?php

use Illuminate\Support\Facades\Route;

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
