<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use App\Tombstone;
use App\Sponsorship;
use App\Role;
use App\User;

use Validator;
use DateTime;
use Mail;

class SponsorshipController extends Controller
{
    public function index()
    {
       	$projects = Tombstone::select('id','name','image_link')->get();
    	return view('frontend.sponsorform')->with(compact('projects'));
    }


    public function create(Request $request)
    {
        $date = new DateTime();
        $prifix = $date->format('y_m_d_H_i_s_');
        
        $validator = Validator::make($request->all(),[
            'companyname'   => 'required',
            'contactperson' => 'required',
            'email'         => 'required|email',
            'phonenumber'   => 'required|numeric',
            'projectId'     => 'required',
        ]);

        if($validator->fails()){
            $errors = $validator->messages();
            return redirect()->route('Sponsorship')->withInput()->with('errors',$errors);
        }else{
            $projectCheck = Sponsorship::where('project_id','=',$request->input('projectId'))->count();
            if($projectCheck >= '5'){
                return redirect()->route('Sponsorship')->withInput()->with('error','This technology sponsorship has been completed.');
            }else{
                
                $sponsor  = new Sponsorship();
                $sponsor->project_id      =  $request->input('projectId');
                $sponsor->compname        =  $request->input('companyname');
                $sponsor->contactperson   =  $request->input('contactperson');
                $sponsor->contactemail    =  $request->input('email');
                $sponsor->contactnumber   =  $request->input('phonenumber');
                if($sponsor->save()){
                   
                    $adminUser = User::where('roleid','=',Role::$SUPER_ADMIN)->first();
                    
                    //admin mail notification
                    $mail_details = array(
                        'adminMail'=> $adminUser->email,
                    );
                    $data = array(
                        'mail'             => 'adminSponsorship',
                        'company_name'     => ucfirst($sponsor->compname), 
                        'contact_person'   => ucfirst($sponsor->contactperson),
                        'contactnumber'    => $sponsor->contactnumber,
                        'contactemail'     => $sponsor->contactemail,
                        'project'          => $this->getProject($sponsor->project_id), 
                    );
                    Mail::send(['html'=>'emails.mail'], $data, function($message) use($mail_details){
                        $message->to( $mail_details['adminMail'] , 'Super Admin');
                        $message->subject(' New sponsor applied for project has been registered!');
                        $message->from('Admin@sprowtt.com','Administrator');
                    });

                    //applier mail notification
                    $appMail_details = array(
                        'applierMail'=> $sponsor->contactemail,
                    );
                    $appData = array(
                        'mail'             => 'applierSponsorship',
                        'contact_person'   => ucfirst($sponsor->contactperson),
                        'project'          => $this->getProject($sponsor->project_id),
                    );
                    Mail::send(['html'=>'emails.mail'], $appData, function($message) use($appMail_details){
                        $message->to( $appMail_details['applierMail'] , 'Sponsor');
                        $message->subject('Thank you for sponsor to our technology');
                        $message->from('Admin@sprowtt.com','Administrator');
                    });
                    return redirect()->route('Sponsorship')
                                ->with('success','You have been successfully sponsored');
                }
            }
        }
    }

    protected function getProject($value)
    {
        $project  = Tombstone::find($value);
        return $project->name;
    }



}
