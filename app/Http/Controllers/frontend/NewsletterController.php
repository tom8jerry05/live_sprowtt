<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use App\Newsletter;

class NewsletterController extends Controller
{
    public function create(Request $request){

    	$validator = Validator::make($request->all(),[
    		'email'       => 'required|email|unique:newsletters,email',
    	]);
        
    	if($validator->fails()){
    		return response()->json(['errors'=>$validator->errors()->all()]);
    	}else{
    		$newsletter = new Newsletter();
    		$newsletter->email= $request->input('email');
    		if($newsletter->save()){
    			return response()->json(['success'=>'Record has been saved successfully..!']);
    		}else{
    			return response()->json(['error'=>'Record has been failed to save..!']);
    		}
    	}

    }
}
