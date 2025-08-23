<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use App\Student;
use App\Country;
use App\State;
use App\City;

class StudentsController extends Controller
{
    public function index()
    {
        $countries  = Country::select('id','name')->get();
    	return view('frontend.student')->with(compact('countries'));
    }

    public function getState(Request $request)
    {
        $States  = State::select('id','name')
                    ->where("country_id","=",$request->input('country_id'))
                    ->get();
        return json_encode($States);
    }

    public function getCity(Request $request)
    {

        $cities  = City::select('id','name')
                    ->where("state_id","=",$request->input('state_id'))
                    ->get();
        return json_encode($cities);

    }

    public function create(Request $request)
    {

    	$validator = Validator::make($request->all(),[
    		'firstname'          => 'required',
    		'lastname'           => 'required',
    		'primaryphonenumber' => 'required|numeric|unique:students,primaryphonenumber',
    		'alterphonenumber'   => 'required|numeric|unique:students,alterphonenumber',
    		'email'              => 'required|email|unique:students,email',
    		'dob'    			 => 'required',
    		'address1'    		 => 'required',
    		'address2'    		 => 'required',
    		'country'      		 => 'required',
    		'state'    			 => 'required',
    		'city'    			 => 'required',
    		'zipcode'            => 'required',
    		'referralSource'     => 'required',
    		'sponsorCode'        => 'required',
    		'citizenship'        => 'required',
    		'currentUniversity'  => 'required',
    		'major'              => 'required',
    		'currentGPA'         => 'required',
    		'graduationDate'     => 'required',
    		'noOfColleges'       => 'required',
    		'medicalSchStart'    => 'required',
    		'MCAT'               => 'required',
    		'score'              => 'required',
    	]);

    	if($validator->fails()){
    		return response()->json(array('status' => false, 'message' => $validator->errors()));
    	}else{

    		$student = new Student();
    		$student->firstname           = $request->input('firstname');
    		$student->lastname            = $request->input('lastname');
    		$student->email 			  = $request->input('email');
    		$student->primaryphonenumber  = $request->input('primaryphonenumber');
    		$student->alterphonenumber    = $request->input('alterphonenumber');
    		$student->dob                 = $request->input('dob');
    		$student->address1            = $request->input('address1');
    		$student->address2            = $request->input('address2');
    		$student->country             = $request->input('country');
    		$student->state               = $request->input('state');
    		$student->city                = $request->input('city');
    		$student->zipcode             = $request->input('zipcode');
    		$student->referralSource      = $request->input('referralSource');
    		$student->sponsorCode         = $request->input('sponsorCode');
    		$student->citizenship         = $request->input('citizenship');
    		$student->currentUniversity   = $request->input('currentUniversity');
    		$student->major               = $request->input('major');
    		$student->currentGPA          = $request->input('currentGPA');
    		$student->graduationDate      = $request->input('graduationDate');
    		$student->noOfColleges        = $request->input('noOfColleges');
    		$student->medicalSchStart     = $request->input('medicalSchStart');
    		$student->MCAT                = $request->input('MCAT');
    		$student->score               = $request->input('score');
    		if($student->save()){
    			$data = 1;
    		}else {
    			$data = 0;
    		}
    		return json_encode($data);	
    	}
    } 
}
