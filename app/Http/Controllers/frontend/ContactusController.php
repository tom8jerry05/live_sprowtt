<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ContactUs;
use App\User;
use App\Role;
use Validator;
use Mail;

class ContactusController extends Controller
{
    public function create(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name'      => 'required',
            'email'     => 'required|email|unique:contactus,email',
            'message'   => 'required',
        ]);

        if($validator->fails()){
    		return response()->json(array('status' => false, 'message' => $validator->errors()));
    	}else{
            
            $contact = new ContactUs();
            $contact->name   = $request->input('name');
            $contact->email   = $request->input('email');
            $contact->message    = $request->input('message');
            if($contact->save()){
                $adminUser = User::where('roleid','=',Role::$SUPER_ADMIN)->first();
                //admin mail notification
                $mail_details = array(
                    'adminMail'=> $adminUser->email,
                );
                $data = array(
                    'mail'             => 'ContactUs',
                    'name'      => ucfirst($contact->name), 
                    'messages'          => $contact->message,
                    'time'             => $contact->created_at
                );
                Mail::send(['html'=>'emails.mail'], $data, function($message) use($mail_details){
                    $message->to( $mail_details['adminMail'] , 'Super Admin');
                    $message->subject(' New Contact details has been registered!');
                    $message->from('Admin@sprowtt.com','Administrator');
                });
                $data = 1;
            }else {
    			$data = 0;
    		}
   			return json_encode($data);   
   		}      
   	}
        
}
    
