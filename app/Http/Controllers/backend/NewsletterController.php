<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\Datatables\Datatables;
use App\Newsletter;
use Validator;
use DateTime;
use Mail;

use App\Sponsorship;
use App\Judge;
use App\ProjectLeader;
use App\ProjectMember;
use App\ProjectAppliers;
use App\Ambassador;

use App\Jobs\SendEmailJob;

class NewsletterController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.newsletter.index');
        
    }

    public function grid()
    {        
        $query = Newsletter::select('*')->get();
        return Datatables::of($query)
        ->addIndexColumn()
        ->editColumn('status',function($model) {
            if($model->status == 0){
                return '<span class="label label-success btn-xs">Subscribed</span>';
            }else{
                return '<span class="label label-warning btn-xs">UnSubscribed</span>';
            }
        })
        ->addColumn('action', function($model) {
            if($model->status == 0){
                return '<a href="'. route('newsletter.unsubscribe', $model->id) .'" class="btn btn-warning btn-xs" type="button" aria-pressed="false"><i class="fa fa-pencil-square-o"></i> UnSubscribe</a>';
            }else{
                return '<a href="'. route('newsletter.subscribe', $model->id) .'" class="btn btn-primary btn-xs" type="button" aria-pressed="false"><i class="fa fa-pencil-square-o"></i> Subscribe</a>';
            }
        })
        ->rawColumns(['status', 'action'])
        ->make(true);   
    }


    public function compose()
    {
        return view('backend.newsletter.compose');
    }

    public function sendMails(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'mail_option'       => 'required',
            'mail_subject'      => 'required',
            'mail_content'      => 'required',
        ]);
        if($validator->fails()){
            $errors = $validator->messages();
            return redirect()->route('BENewsLetterCompose')->with('errors',$errors);
        }else{

            $mail_option  = $request->input('mail_option');
            $mail_to      = $request->input('mail_to');
            $mail_subject = $request->input('mail_subject');
            $mail_content = $request->input('mail_content');

            if($mail_option == 'subscribed_users'){

                $toAddresses = Newsletter::where('status','=','0')->get();
                
                if(!$toAddresses->isEmpty()){
                    foreach($toAddresses as $key => $address)
                    {
                        if( !empty($address->email) )
                        {
                            $details = array(
                                'toMail'  => $address->email,
                                'subject' => $mail_subject,
                            );
                            $data = array(
                                'mail'             => 'backendNewsletterModel',
                                'content'          => htmlspecialchars_decode($mail_content),
                                'url'     => route('unsubscribe',$address->id),
                            );
                            dispatch(new SendEmailJob($details,$data));
                        }
                    }
                }
            }elseif($mail_option == 'registered_sponsors'){

                $toAddresses = Sponsorship::select('*')->get();

                if(!$toAddresses->isEmpty()){
                    foreach($toAddresses as $key => $address)
                    {
                        if( !empty($address->contactemail) )
                        {
                            $details = array(
                                'toMail'  => $address->contactemail,
                                'subject' => $mail_subject
                            );
                            $data = array(
                                'mail'             => 'backendNewsletter',
                                'content'          => htmlspecialchars_decode($mail_content),
                            );
                            dispatch(new SendEmailJob($details,$data));
                        }
                    }
                }

            }elseif($mail_option == 'registered_judges'){

                $toAddresses = Judge::select('*')->get();

                if(!$toAddresses->isEmpty()){
                    foreach($toAddresses as $key => $address)
                    {
                        if( !empty($address->email) )
                        {
                            $details = array(
                                'toMail'  => $address->email,
                                'subject' => $mail_subject
                            );
                            $data = array(
                                'mail'             => 'backendNewsletter',
                                'content'          => htmlspecialchars_decode($mail_content),
                            );
                            dispatch(new SendEmailJob($details,$data));
                        }
                    }
                }
            }elseif($mail_option == 'registered_team_leaders'){
                
                $toAddresses = ProjectLeader::join('projectappliers','projectappliers.id','=','project_leaders.applier_id')
                    ->select('projectappliers.email as email','project_leaders.*')
                    ->get();

                if(!$toAddresses->isEmpty()){
                    foreach($toAddresses as $key => $address)
                    {
                        if( !empty($address->email) )
                        {
                            $details = array(
                                'toMail'  => $address->email,
                                'subject' => $mail_subject
                            );
                            $data = array(
                                'mail'             => 'backendNewsletter',
                                'content'          => htmlspecialchars_decode($mail_content),
                            );
                            dispatch(new SendEmailJob($details,$data));
                        }
                    }
                }
            }elseif($mail_option == 'registered_team_members'){
                $toAddresses = Newsletter::where('status','=','0')->get();
                $toAddresses = ProjectMember::join('projectappliers','projectappliers.id','=','project_members.applier_id')
                    ->select('projectappliers.email as email','project_members.*')
                    ->get();

                if(!$toAddresses->isEmpty()){
                    foreach($toAddresses as $key => $address)
                    {
                        if( !empty($address->email) )
                        {
                            $details = array(
                                'toMail'  => $address->email,
                                'subject' => $mail_subject
                            );
                            $data = array(
                                'mail'             => 'backendNewsletter',
                                'content'          => htmlspecialchars_decode($mail_content),
                            );
                            dispatch(new SendEmailJob($details,$data));
                        }
                    }
                }
            }elseif($mail_option == 'registered_ambassador'){
                $toAddresses = Ambassador::select('*')->get();
                if(!$toAddresses->isEmpty()){
                    foreach($toAddresses as $key => $address)
                    {
                        if($address->contactemail == '')
                        {
                            $details = array(
                                'toMail'  => $address->email,
                                'subject' => $mail_subject
                            );
                            $data = array(
                                'mail'             => 'backendNewsletter',
                                'content'          => htmlspecialchars_decode($mail_content),
                            );
                            dispatch(new SendEmailJob($details,$data));
                        }
                    }
                }
            }elseif($mail_option == 'to_mail'){
                $toAddresses = $request->input('mail_to');

                   // echo $toAddresses;

                if( !empty($toAddresses) ) {
                    $details = array(
                        'toMail'  => $toAddresses,
                        'subject' => $mail_subject,
                    );


                    $data = array(
                        'mail'             => 'backendNewsletter',
                        'content'          => htmlspecialchars_decode($mail_content),
                    );

                    dispatch(new SendEmailJob($details,$data));
                }
            }
            return redirect()->route('BENewsLetter')->with('success','Mail sent successfully..!');
        }
    }





    public function unsubscribe($id)
    {
        $newsLetter = Newsletter::find($id);
        $newsLetter->status = '1';
        if($newsLetter->update()){
            return redirect()->route('BENewsLetter');
        }
    }

    public function subscribe($id)
    {
        $newsLetter = Newsletter::find($id);
        $newsLetter->status = '0';
        if($newsLetter->update()){
            return redirect()->route('BENewsLetter');
        }
    }




}
