<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Validator;
use App\Ambassador;
use App\Country;
use App\State;
use App\City;
use App\Role;
use App\User;
use DateTime;
use Mail;

class AmbassadorController extends Controller
{
     public function index()
    {
    	$countries  = Country::select('id','name')->get();
    	return view('frontend.ambassadorform')->with(compact('countries'));
    }

    public function create(Request $request)
    {

    	$date = new DateTime();
    	$prifix = $date->format('y_m_d_H_i_s_');
        
    	$validator = Validator::make($request->all(),[
    		'resume'      => 'required|mimes:pdf,docx,docs',
    		'firstname'   => 'required',
    		'lastname'    => 'required',
            'address'     => 'required',
            'country'     => 'required',
            'state'       => 'required',
            'city'        => 'required',
    		'email'       => 'required|email|unique:ambassador,email|unique:users,email',
    		'phonenumber' => 'required|numeric|unique:ambassador,phonenumber',
    	]);

    	if($validator->fails()){
            $errors = $validator->messages();
            return redirect()->route('Ambassador')->withInput()->with('errors',$errors);
    	}else{
            $file = $request->file('resume');
            
    		$ambassador = new Ambassador();
    		$ambassador->firstname   = $request->input('firstname');
    		$ambassador->lastname    = $request->input('lastname');
    		$ambassador->email       = $request->input('email');
    		$ambassador->phonenumber = $request->input('phonenumber');
            $ambassador->address     = $request->input('address');
            $ambassador->country     = $request->input('country');
            $ambassador->state       = $request->input('state');
            $ambassador->city        = $request->input('city');
    		$ambassador->resume      = $prifix.$file->getClientOriginalName();
            if($ambassador->save()){
                $pass = $this->getRandomPass(6);
                $user = new User();
                $user->name   = $request->input('firstname').' '.$request->input('lastname');
                $user->email  = $request->input('email');
                $user->roleid = Role::$AMBASSADOR;
                $user->password = bcrypt($pass);
                if($user->save()){
                    $adminUser = User::where('roleid','=',Role::$SUPER_ADMIN)->first();
                    //admin mail notification
                    $mail_details = array(
                        'adminMail'=> $adminUser->email,
                        'urlPath'  => $file->getRealPath(), 
                        'fileName' => $prifix.$file->getClientOriginalName(),
                        'mimeType' => $file->getMimeType(), 
                    );
                    $data = array(
                        'mail'             => 'adminAmbassador',
                        'applier_name'     => ucfirst($ambassador->firstname).' '.ucfirst($ambassador->lastname), 
                        'person_email'     => $ambassador->email,
                        'applier_phone'    => $ambassador->phonenumber,
                        'applier_address'  => $ambassador->address,
                        'applier_country'  => $this->getCountry($ambassador->country),
                        'applier_state'    => $this->getState($ambassador->state),
                        'applier_city'     => $this->getCity($ambassador->city),
                        'password'         => $pass
                    );
                    Mail::send(['html'=>'emails.mail'], $data, function($message) use($mail_details){
                        $message->to( $mail_details['adminMail'] , 'Super Admin');
                        $message->subject(' New ambassador candidate has been registered!');
                        $message->from('Admin@sprowtt.com','Administrator');
                        $message->attach($mail_details['urlPath'], 
                        [
                            'as' => $mail_details['fileName'],
                            'mime' => $mail_details['mimeType']
                        ]);
                    });


                    //applier mail notification
                    $appMail_details = array(
                        'applierMail'=> $ambassador->email,
                    );
                    $appData = array(
                        'mail'             => 'applierAmbassador',
                        'person_name'      => ucfirst($ambassador->firstname).' '.ucfirst($ambassador->lastname),
                        'person_email'     => $ambassador->email,
                        'password'         => $pass
                    );
                    Mail::send(['html'=>'emails.mail'], $appData, function($message) use($appMail_details){
                        $message->to( $appMail_details['applierMail'] , 'Ambassador');
                        $message->subject('Sprowtt Launch Pad Account Details!');
                        $message->from('Admin@sprowtt.com','Administrator');
                    });

                    //Moving uploaded file to server
                    $destinationPath = 'resume';
                    $file->move($destinationPath,$prifix.$file->getClientOriginalName());
                    return redirect()->route('Ambassador')
                                ->with('success','You have been successfully registered and password will sent by mail!');

                }
            }
    	}
    }


    protected function getRandomPass($n){
        $characters = '0123456789abcdefghijklmnopqrstuvwxyz'; 
        $randomString = ''; 
        for ($i = 0; $i < $n; $i++) { 
            $index = rand(0, strlen($characters) - 1); 
            $randomString .= $characters[$index]; 
        }
        return $randomString;
    }


    protected function getCountry($value)
    {
        $countries  = Country::find($value);
        return $countries->name;
    }
    protected function getState($value)
    {
        $States  = State::find($value);
        return $States->name;
    }
    protected function getCity($value)
    {
        $cities  = City::find($value);
        return $cities->name;
    }
}
