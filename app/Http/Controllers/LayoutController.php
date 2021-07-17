<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayoutController extends Controller
{
    public function create(){
        return view('events/form');
    }
    public function list(){
        return view('events/list');
    }
    public function masterLayout(){
        return view('layout/master-layout');
    }
    //
}
