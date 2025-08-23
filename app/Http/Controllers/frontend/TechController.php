<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use App\Newtech;
use App\Country;
use App\Role;
use App\User;
use DateTime;
use Mail;

class TechController extends Controller
{
    public function index()
    {

        $countries  = Country::select('id','name')->get();
    	return view('frontend.techform')->with(compact('countries'));
    }

    public function create(Request $request)
    {
    	$date = new DateTime();
    	$prifix = $date->format('y_m_d_H_i_s_');

    	$validator = Validator::make($request->all(),[
    		'firstname'             => 'required',
    		'lastname'              => 'required',
    		'email'                 => 'required|email|unique:newteches,email',
    		'phonenumber'           => 'required|integer|unique:newteches,phonenumber',
            'residentEurope'        => 'required',
    		'affilatedStatus'       => 'required',
    		'innovationTitle'       => 'required',
    		'innovationDescribe'    => 'required',
    		'clinicalBenefits'      => 'required',
    		'category'              => 'required',
    		'marketOffer'           => 'required',
    		'developmentStatus'     => 'required',
    		//'regulatoryClearance'   => 'required',
    		'intellectualProperty'  => 'required',
    		//'disclosedStatus'       => 'required',
    		'businessObjectives'    => 'required',
    		//'additionalInformation' => 'required',
            'funding'               => 'required',
            'entrepreneur'          => 'required',
            'hearAbout'             => 'required',
    		//'attachment1'           => 'mimes:pdf,docx,docs',
    		//'attachment2'           => 'mimes:pdf,docx,docs',
    		'confirmation'          => 'required|integer',
    	]);


    	if($validator->fails()){
    		$errors = $validator->messages();
            return redirect()->route('Tech')->withInput()
                                ->with('errors',$errors);
    	}else{
    		$attachment1 = null;
    		$attachment2 = null;

            $file1 = $request->file('attachment1');
            $file2 = $request->file('attachment2');


    		if($file1 != null){
    			
    			$attachment1  = $prifix.$file1->getClientOriginalName();
    		}
    		if($file2 != null){
    			
    			$attachment2  = $prifix.$file2->getClientOriginalName();
    		}

    		$newtech = new Newtech();
    		$newtech->firstname               = $request->input('firstname');
    		$newtech->lastname                = $request->input('lastname');
    		$newtech->email                   = $request->input('email');
            $newtech->phonenumber             = $request->input('phonenumber');
    		$newtech->resident_europe         = $request->input('residentEurope');
    		$newtech->affilated_status        = $request->input('affilatedStatus');
    		$newtech->innovation_title        = $request->input('innovationTitle');
    		$newtech->innovation_describe     = $request->input('innovationDescribe');
    		$newtech->clinical_benefits       = $request->input('clinicalBenefits');
    		$newtech->category                = $request->input('category');
    		$newtech->market_offer            = $request->input('marketOffer');
    		$newtech->development_status      = $request->input('developmentStatus');
    		$newtech->regulatory_clearance    = $request->input('regulatoryClearance');
    		$newtech->intellectual_property   = $request->input('intellectualProperty');
    		$newtech->disclosed_status        = $request->input('disclosedStatus');
    		$newtech->business_objectives     = $request->input('businessObjectives');
    		$newtech->additional_information  = $request->input('additionalInformation');
            $newtech->funding                 = $request->input('funding');
            $newtech->entrepreneur            = $request->input('entrepreneur');
            $newtech->hearAbout               = $request->input('hearAbout');
    		$newtech->attachment1             = $attachment1;
    		$newtech->attachment2             = $attachment2;
    		$newtech->confirmation            = $request->input('confirmation');
    		if($newtech->save()){

    			//admin mail notification

                $adminUser = User::where('roleid','=',Role::$SUPER_ADMIN)->first();
            	$data = array(
            		'mail'                   => 'Newtech',
                	'person_name'            => strtoupper($newtech->firstname.' '.$newtech->lastname),
                	'person_email'           => $newtech->email,
                	'resident_europe'		 =>	$this->getCountry($newtech->resident_europe),
                	'affilated_status'		 =>	$newtech->affilated_status,
                	'innovation_title'       => $newtech->innovation_title,
    				'innovation_describe'    => $newtech->innovation_describe,
    				'clinical_benefits'      => $newtech->clinical_benefits,
    				'category'               => $newtech->category,
    				'market_offer'           => $newtech->market_offer,
    				'development_status'     => $this->getdevelopmentStatus($newtech->development_status),
    				'regulatory_clearance'   => $newtech->regulatory_clearance,
    				'intellectual_property'  => $newtech->intellectual_property,
    				'disclosed_status'       => $newtech->disclosed_status,
    				'business_objectives'    => $this->getbusinessObjectives($newtech->business_objectives),
    				'additional_information' => $newtech->additional_information
            	);

                
                $mail_details = array(
                    'adminMail'=> $adminUser->email,
                    'file1'  => $request->file('attachment1'),
                    'file2'  => $request->file('attachment2'),
                );

                if($file1 != null){
                    $mail_details['urlPath1']  = $file1->getRealPath();
                    $mail_details['fileName1'] = $prifix.$file1->getClientOriginalName();
                    $mail_details['mimeType1'] = $file1->getMimeType();
                }

                if($file2 != null){
                    $mail_details['urlPath2']  = $file2->getRealPath();
                    $mail_details['fileName2'] = $prifix.$file2->getClientOriginalName();
                    $mail_details['mimeType2'] = $file2->getMimeType();
                }

    			Mail::send(['html'=>'emails.mail'], $data, function($message) use($mail_details){
              		$message->to( $mail_details['adminMail'] , 'Super Admin');
                	$message->subject(' New Technology request has been received!');
                	$message->from('Admin@sprowtt.com','Administrator');

                    if($mail_details['file1'] != null){
                        $message->attach($mail_details['urlPath1'], 
                        [
                            'as' => $mail_details['fileName1'],
                            'mime' => $mail_details['mimeType1']
                        ]);
                    }

                    if($mail_details['file2'] != null){
                        $message->attach($mail_details['urlPath2'], 
                        [
                            'as' => $mail_details['fileName2'],
                            'mime' => $mail_details['mimeType2']
                        ]);
                    }
            	});

                $destinationPath = 'NewTech Attachments';
                if($file1 != null){
                    $file1->move($destinationPath,$prifix.$file1->getClientOriginalName());
                }
                if($file2 != null){
                    $file2->move($destinationPath,$prifix.$file2->getClientOriginalName());
                }
                
    			return redirect()->route('Tech')
                                ->with('success','You have been successfully registered!');
    		}
    	}		
    }


    protected function getCountry($value)
    {
        $countries  = Country::find($value);
        return $countries->name;
    }


    protected function getdevelopmentStatus($value)
    {
 		$data_arr = explode (",", $value);
 		$retunable = [];
 		foreach ($data_arr as $key => $value) {
 			if($value == 1){
 				$retunable[] = 'Concept';
 			}elseif ($value == 2) {
 				$retunable[] = 'Research';
 			}elseif ($value == 3) {
 				$retunable[] = 'Engineering Drawings';
 			}elseif ($value == 4) {
 				$retunable[] = 'Working prototype';
 			}elseif ($value == 5) {
 				$retunable[] = 'Relevant testing completed';
 			}elseif ($value == 6) {
 				$retunable[] = 'Regulatory clearance has been received';
 			}elseif ($value == 7) {
 				$retunable[] = 'Commercialized Device';
 			}
 		}
    	return $retunable;
    }

    protected function getbusinessObjectives($value)
    {
 		$data_arr = explode (",", $value);
 		$retunable = [];
 		foreach ($data_arr as $key => $value) {
 			if($value == 1){
 				$retunable[] = 'Co-development';
 			}elseif ($value == 2) {
 				$retunable[] = 'Licensing';
 			}elseif ($value == 3) {
 				$retunable[] = 'Royalties';
 			}elseif ($value == 4) {
 				$retunable[] = 'Sale';
 			}elseif ($value == 5) {
 				$retunable[] = 'Other';
 			}
 		}
 		return $retunable;
    }
}
