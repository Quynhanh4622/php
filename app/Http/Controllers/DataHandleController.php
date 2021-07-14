<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class DataHandleController extends Controller
{
    public function handlePathVariable($id){
        return $id;
    }
    public function handleQueryString(Request $request){
        $firstName = $request->get('firstName');
        $lastName = $request->get('lastName');
        $email = $request->get('email');
        return view('/Handle/dataHandle'.[
                'email'=>$email,
                'firstName'=>$firstName,
                'lastName'=>$lastName
            ]);
    }
    public function returnForm(){
        return view('/Handle/form-data');
    }
    public function processForm(Request $request){
        $eventName = $request->get('eventName');
        $bandNames = $request->get('bandNames');
        $startDate = $request->get('startDate');
        $endDate = $request->get('endDate');
        $portfolio = $request->get('portfolio');
        $ticketPrice = $request->get('ticketPrice');
        $status = $request->get('status');
        return view('/Handle/formSuccess'.[
            'eventName'=>$eventName,
            'bandNames'=>$bandNames,
            'startDate'=>$startDate,
            'endDate'=>$endDate,
            'portfolio'=>$portfolio,
            'ticketPrice'=>$ticketPrice,
            'status'=>$status,
        ]);
    }
    //
}
