<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use App\Internship;
use App\Country;
use App\State;
use App\City;
use App\Role;
use App\User;
use DateTime;
use Mail;

class InternshipController extends Controller
{

    public function index()
    {
        $countries  = Country::select('id','name')->get();
    	return view('frontend.internform')->with(compact('countries'));
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
            'email'       => 'required|email|unique:internships,email|unique:users,email',
            'phonenumber' => 'required|numeric|unique:internships,phonenumber',
        ]);

        if($validator->fails()){
            $errors = $validator->messages();
            return redirect()->route('Internship')->withInput()->with('errors',$errors);
        }else{
            $file = $request->file('resume');
            
            $judge = new Internship();
            $judge->firstname   = $request->input('firstname');
            $judge->lastname    = $request->input('lastname');
            $judge->email       = $request->input('email');
            $judge->phonenumber = $request->input('phonenumber');
            $judge->address     = $request->input('address');
            $judge->country     = $request->input('country');
            $judge->state       = $request->input('state');
            $judge->city        = $request->input('city');
            $judge->resume      = $prifix.$file->getClientOriginalName();
            if($judge->save()){
                $pass = $this->getRandomPass(6);
                $user = new User();
                $user->name   = $request->input('firstname').' '.$request->input('lastname');
                $user->email  = $request->input('email');
                $user->roleid = Role::$INTERN;
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
                        'mail'             => 'adminInternship',
                        'applier_name'     => ucfirst($judge->firstname).' '.ucfirst($judge->lastname), 
                        'person_email'     => $judge->email,
                        'applier_phone'    => $judge->phonenumber,
                        'applier_address'  => $judge->address,
                        'applier_country'  => $this->getCountry($judge->country),
                        'applier_state'    => $this->getState($judge->state),
                        'applier_city'     => $this->getCity($judge->city),
                        'password'         => $pass
                    );
                    Mail::send(['html'=>'emails.mail'], $data, function($message) use($mail_details){
                        $message->to( $mail_details['adminMail'] , 'Super Admin');
                        $message->subject(' New judge candidate has been registered!');
                        $message->from('Admin@sprowtt.com','Administrator');
                        $message->attach($mail_details['urlPath'], 
                        [
                            'as' => $mail_details['fileName'],
                            'mime' => $mail_details['mimeType']
                        ]);
                    });


                    //applier mail notification
                    $appMail_details = array(
                        'applierMail'=> $judge->email,
                    );
                    $appData = array(
                        'mail'             => 'applierInternship',
                        'person_name'      => ucfirst($judge->firstname).' '.ucfirst($judge->lastname),
                        'person_email'     => $judge->email,
                        'password'         => $pass
                    );
                    Mail::send(['html'=>'emails.mail'], $appData, function($message) use($appMail_details){
                        $message->to( $appMail_details['applierMail'] , 'Judge');
                        $message->subject('Sprowtt Launch Pad Account Details!');
                        $message->from('Admin@sprowtt.com','Administrator');
                    });

                    //Moving uploaded file to server
                    $destinationPath = 'resume';
                    $file->move($destinationPath,$prifix.$file->getClientOriginalName());
                    return redirect()->route('Internship')
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
