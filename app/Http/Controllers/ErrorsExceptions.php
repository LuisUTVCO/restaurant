<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ErrorsExceptions extends Controller
{
    public function  index(){

    	return view('errors.error');
    }
    
    
}
