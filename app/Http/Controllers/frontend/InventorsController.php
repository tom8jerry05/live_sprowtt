<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use App\Inventors;
use Mail;

class InventorsController extends Controller
{
    public function index()
    {
    	return view('frontend.inventorsform');
    }

    

    public function create(Request $request)
    {


    	$validator = Validator::make($request->all(),[
    		'firstname' => 'required',
    		'lastname' => 'required',
    		'email' => 'required|email|unique:inventors,email',
    		'phonenumber' => 'required|numeric|unique:inventors,phonenumber',
    		'linkedin' => 'required',
    		'aboutLab' => 'required',
    		//'specificInvitation' => 'required',
    		//'trl' => 'required',
    		//'appropriateAmount' => 'required',
    		'entrepreneur' => 'required|numeric',
    		'dates' => 'required|numeric',
    		'hearAbout' => 'required|numeric',
    		//'suggestion' => 'required',
    	]);

    	if($validator->fails()){
    		return response()->json(array('status' => false, 'message' => $validator->errors()));
    	}else{
    		
    		$inventors = new Inventors();
    		$inventors->firstname     = $request->input('firstname');
    		$inventors->lastname      = $request->input('lastname');
    		$inventors->email         = $request->input('email');
    		$inventors->phonenumber   = $request->input('phonenumber');
    		$inventors->linkedin      = $request->input('linkedin');
    		$inventors->about_lab      = $request->input('aboutLab');
    		$inventors->specific_invitation      = $request->input('specificInvitation');
    		$inventors->trl      = $request->input('trl');
    		$inventors->appropriate_amount      = $request->input('appropriateAmount');
    		$inventors->entrepreneur      = $request->input('entrepreneur');
    		$inventors->dates      = $request->input('dates');
    		$inventors->hear_about      = $request->input('hearAbout');
    		$inventors->suggestion      = $request->input('suggestion');
    		if($inventors->save()){
    			//mail notification
            	$data = array(
            		'mail'                  => 'Inventors',
                	'person_name'           => strtoupper($inventors->firstname.' '.$inventors->lastname),
                	'person_email'          => $inventors->email,
                	'person_number'         => $inventors->phonenumber,
                	'linkedin'              => $inventors->linkedin,
                	'about_lab'             => $inventors->about_lab,
                	'specific_invitation'   => $inventors->specific_invitation,
                	'trl'                   => $inventors->trl,
                	'appropriate_amount'    => $inventors->appropriate_amount,
                	'entrepreneur'          => $this->getEntrepreneur($inventors->entrepreneur),
                	'dates'                 => $this->getDates($inventors->dates),
                	'hear_about'            => $this->getHearAbout($inventors->hear_about),
                	'suggestion'            => $inventors->suggestion,
            	);

    			Mail::send(['html'=>'emails.mail'], $data, function($message){
              		$message->to( 'prasanth.php.ait@gmail.com' , 'AIT');
                	$message->subject(' New Inventors request has been received!');
                	$message->from('Admin@sprowtt.com','Administrator');
            	});

            	$data = 1;
    		}else {
    			$data = 0;
    		}
    		return json_encode($data);
    	}
    }

    protected function getEntrepreneur($value)
    {
    	$returnValue ="";
    	if($value == 1){
    		$returnValue = "Yes,bring it on!";
    	}elseif($value == 2){
    		$returnValue = "Not right now";
    	}elseif($value == 3){
    		$returnValue = "Other";
    	}
    	return $returnValue;
    }


    protected function getDates($datavalue)
    {
    	$returnValue ="";
    	if($datavalue == 1){
    		$returnValue = "As of now,nothing is preventing them from attending, but we'll confirm once dates are finalized";
    	}elseif($datavalue == 2){
    		$returnValue = "They won't be able to attend";
    	}elseif($datavalue == 3){
    		$returnValue = "Other";
    	}
    	return $returnValue;
    }


    protected function getHearAbout($value)
    {
    	$returnValue ="";
    	if($value == 1){
    		$returnValue = "Facebook";
    	}elseif($value == 2){
    		$returnValue = "Twitter";
    	}elseif($value == 3){
    		$returnValue = "LinkedIn";
    	}elseif($value == 4){
    		$returnValue = "Search Engines";
    	}elseif($value == 5){
    		$returnValue = "Friends/Colleagues";
    	}elseif($value == 6){
    		$returnValue = "Other";
    	}
    	return $returnValue;
    }
}
