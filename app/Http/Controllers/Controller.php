<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;


class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
     //route to vue js application
    public function getPHPVars(){
    
         
        $hello= ['greeting'=>'hi'];
        return view('app', compact('hello'));
    }
    
}
