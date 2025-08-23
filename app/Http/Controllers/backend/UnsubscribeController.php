<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Newsletter;
use Validator;
use DateTime;
use Mail;

class UnsubscribeController extends Controller
{
	/**
	* Create a new controller instance.
	*
	* @return void
	*/
    /*public function __construct()
    {
        $this->middleware('guest');
    }*/





    public function unsubscribe($id){
        $newsLetter = Newsletter::find($id);
        $newsLetter->status = '1';
        if($newsLetter->update()){
            echo 'UnSubscribed Successfully.!';
            exit();
        }
        
    }




}
