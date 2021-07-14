<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    //
    public function register(){
        return view('blade');
    }
    public function processRegister(){
        return 'good bye';
    }
}
