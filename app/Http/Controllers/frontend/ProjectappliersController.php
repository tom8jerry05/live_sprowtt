<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Validator;
use DateTime;
use Mail;

use App\ProjectAppliers;
use App\Country;
use App\State;
use App\City;
use App\Tombstone;
use App\User;

use App\Role;

class ProjectappliersController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*public function __construct()
    {
        $this->middleware('auth');
    }*/

    public function index($id)
    {
        if($id != '0'){
            $tombstone = Tombstone::find($id);
            if($tombstone->video_option == 'upload'){
                $tombstone->video_link = url('/tombstone/'.$tombstone->video_link);
            }
            $projects='';
        }else{
            $tombstone='';
            $projects = Tombstone::select('id','name','image_link')->get();

            /*foreach ($projects as $key => $value) {
                $value['image_link'] = url('/tombstone/'.$value['image_link']);
            }*/
        }
        $countries  = Country::select('id','name')->get();
    	return view('frontend.projectapplier')->with(compact('countries'))->with(compact('tombstone'))->with(compact('projects'));
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
        $date = new DateTime();
        $prifix = $date->format('y_m_d_H_i_s_');

    	$validator = Validator::make($request->all(),[
    		'firstname'          => 'required',
    		'lastname'           => 'required',
    		'primaryphonenumber' => 'required|numeric|unique:projectappliers,primaryphonenumber',
    		'alterphonenumber'   => 'required|numeric|unique:projectappliers,alterphonenumber',
    		'email'              => 'required|email|unique:projectappliers,email',
    		'dob'    			 => 'required',
    		'address1'    		 => 'required',
    		//'address2'    		 => 'required',
    		'country'      		 => 'required',
    		'state'    			 => 'required',
    		'city'    			 => 'required',
    		'zipcode'            => 'required',
    		//'referralSource'     => 'required',
    		//'sponsorCode'        => 'required',
    		'citizenship'        => 'required',
    		'currentUniversity'  => 'required',
    		'major'              => 'required',
    		'currentGPA'         => 'required',
            //'attendmedischool'   => 'required',
    		//'graduationDate'     => 'required',
            'interestedtl'       => 'required',
            'projectId'          => 'required',
            'applierType'        => 'required',
    	],[ 
            
            'primaryphonenumber.unique' => 'The Primary Phone Number has already been taken.',
            'alterphonenumber.unique' => 'The Alternative Phone Number has already been taken.',
            'email.unique' => 'The Email has already been taken.',
            
        ]);

    	if($validator->fails()){
            $errors = $validator->messages();
            return redirect()->route('ProjectApply',$request->input('projectId'))->withInput()
                                ->with('errors',$errors);
    	}else{
           
            $file = $request->file('resume');
            
    		$student = new ProjectAppliers();
            $student->applier_type        = $request->input('applierType');
            $student->project_id          = $request->input('projectId');
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
    		//$student->referralSource      = $request->input('referralSource');
    		//$student->sponsorCode         = $request->input('sponsorCode');
    		$student->citizenship         = $request->input('citizenship');
    		$student->currentUniversity   = $request->input('currentUniversity');
    		$student->major               = $request->input('major');
    		$student->currentGPA          = $request->input('currentGPA');
            //$student->attendmedischool    = $request->input('attendmedischool');
            //$student->graduationDate      = $request->input('graduationDate');
            $student->interestedtl        = $request->input('interestedtl');
            $student->resume              = $prifix.$file->getClientOriginalName();

    		if($student->save()){
                $adminUser = User::where('roleid','=',Role::$SUPER_ADMIN)->first();
                
                //admin mail notification
                $mail_details = array(
                    'adminMail'=> $adminUser->email,
                    'urlPath'  => $file->getRealPath(), 
                    'fileName' => $prifix.$file->getClientOriginalName(),
                    'mimeType' => $file->getMimeType(), 
                );
                $data = array(
                    'mail'             => 'adminProject',
                    'applier_name'     => ucfirst($student->firstname).' '.ucfirst($student->lastname), 
                    'person_email'     => $student->email,
                    'applier_phone'    => $student->primaryphonenumber,
                    'applier_address'  => $student->address1,
                    'applier_country'  => $this->getLableCountry($student->country),
                    'applier_state'    => $this->getLableState($student->state),
                    'applier_city'     => $this->getLableCity($student->city)
                );
                Mail::send(['html'=>'emails.mail'], $data, function($message) use($mail_details){
                    $message->to( $mail_details['adminMail'] , 'Super Admin');
                    $message->subject(' New member candidate has been applied!');
                    $message->from('Admin@sprowtt.com','Administrator');
                    $message->attach($mail_details['urlPath'], 
                    [
                        'as' => $mail_details['fileName'],
                        'mime' => $mail_details['mimeType']
                    ]);
                });

                //applier mail notification
                /*$appMail_details = array(
                    'applierMail'=> $judge->email,
                );
                $appData = array(
                    'mail'             => 'applierProject',
                    'person_name'      => ucfirst($judge->firstname).' '.ucfirst($judge->lastname),
                    'person_email'     => $judge->email,
                    'password'         => $pass
                );
                Mail::send(['html'=>'emails.mail'], $appData, function($message) use($appMail_details){
                    $message->to( $appMail_details['applierMail'] , 'Judge');
                    $message->subject('Sprowtt Launch Pad Account Details!');
                    $message->from('Admin@sprowtt.com','Administrator');
                });*/
                //Moving uploaded file to server
                $destinationPath = 'projectApply';
                $file->move($destinationPath,$prifix.$file->getClientOriginalName());

                return redirect()->route('Home')
                                ->with('success','Your application has been applied successfully!');
    		}
    	}
    }

    protected function getLableCountry($value)
    {
        $countries  = Country::find($value);
        return $countries->name;
    }

    protected function getLableState($value)
    {
        $States  = State::find($value);
        return $States->name;
    }

    protected function getLableCity($value)
    {
        $cities  = City::find($value);
        return $cities->name;
    }
}
