<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Validator;
use DateTime;
use Mail;


use App\EventApplier;
use App\Country;
use App\State;
use App\City;
use App\Tombstone;
use App\User;
use App\Role;

class EventapplierController extends Controller
{
    
	public function index($id)
    {
        if($id != '0'){
            $tombstone = Tombstone::find($id);
            $projects='';
        }else{
            $tombstone='';
            $projects = Tombstone::select('id','name')->get();
        }
        $countries  = Country::select('id','name')->get();


    	return view('frontend.eventapplier')->with(compact('countries'))->with(compact('tombstone'))->with(compact('projects'));
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
            'firstname'    => 'required',
            'lastname'     => 'required',
            'address'      => 'required',
            'country'      => 'required',
            'state'        => 'required',
            'city'         => 'required',
            'email'        => 'required',
            'phonenumber'  => 'required',
            'interestedEv' => 'required',
        ]);

        if($validator->fails()){
            $errors = $validator->messages();
            return redirect()->route('EventApplier',$request->input('projectId'))->withInput()->with('errors',$errors);
        }else{
	    	$condition = EventApplier::select('*')
							->where('project_id','=',$request->input('projectId'))
							->where(function($q) use($request) {
								$q->where('phonenumber','=',$request->input('phonenumber'))
									->orWhere('email','=',$request->input('email'));
							})
							->get();			

        	if(!$condition->isEmpty()){
        		return redirect()->route('EventApplier',$request->input('projectId'))->withInput()->with('error','You have already registered with this project.');
        	}elseif($condition->isEmpty()){
        		$eventApplier = new EventApplier();
	            $eventApplier->project_id     = $request->input('projectId');
	            $eventApplier->firstname      = $request->input('firstname');
	            $eventApplier->lastname       = $request->input('lastname');
	            $eventApplier->email          = $request->input('email');
	            $eventApplier->phonenumber    = $request->input('phonenumber');
	            $eventApplier->address        = $request->input('address');
	            $eventApplier->country        = $request->input('country');
	            $eventApplier->state          = $request->input('state');
	            $eventApplier->city           = $request->input('city');
	            $eventApplier->event_days     = $request->input('interestedEv');

	            if($eventApplier->save()){
	                $adminUser = User::where('roleid','=',Role::$SUPER_ADMIN)->first();
	                //admin mail notification
	                $mail_details = array(
	                    'adminMail'=> $adminUser->email
	                );
	                $data = array(
	                    'mail'             => 'adminEventApp',
	                    'applier_name'     => ucfirst($eventApplier->firstname).' '.ucfirst($eventApplier->lastname), 
	                    'person_email'     => $eventApplier->email,
	                    'applier_phone'    => $eventApplier->phonenumber,
	                    'applier_address'  => $eventApplier->address,
	                    'applier_country'  => $this->getLableCountry($eventApplier->country),
	                    'applier_state'    => $this->getLableState($eventApplier->state),
	                    'applier_city'     => $this->getLableCity($eventApplier->city),
	                    'event_days'       => $eventApplier->event_days,
	                    'project'          => ucfirst($this->getProject($eventApplier->project_id)),
	                );
	                Mail::send(['html'=>'emails.mail'], $data, function($message) use($mail_details){
	                    $message->to( $mail_details['adminMail'] , 'Super Admin');
	                    $message->subject(' New candidate has been registered for event!');
	                    $message->from('Admin@sprowtt.com','Administrator');
	                });

	                //applier mail notification
	                /*$appMail_details = array(
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
	                });*/
	                return redirect()->route('tombStonedetail',$eventApplier->project_id)
	                            ->with('success','You have been successfully registered');
	            }
        		
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

    protected function getProject($id)
    {
        $tombstone  = Tombstone::select('id','name')
                    ->where("id","=",$id)
                    ->first();
        return $tombstone->name;
    }




    //Nasa Spins Out

    public function spinsOutIndex()
    {
    	return view('frontend.spinsout');
    }
}
