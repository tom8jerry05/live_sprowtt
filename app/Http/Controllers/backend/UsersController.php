<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Yajra\Datatables\Datatables;
use App\User;
use App\Role;
use App\Tombstone;
use App\ProjectAppliers;
use App\ProjectLeader;
use App\ProjectMember;
use App\Country;
use App\State;
use App\City;
use App\Judge;
use App\Internship;
use App\Ambassador;

use Validator;
use DateTime;
use Mail;



class UsersController extends Controller
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
        return view('backend.users.index');
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $roles = Role::select('*')->whereNotIn('id',[1])->get();
        $projects = Tombstone::select('*')->get();

        $countries  = Country::select('id','name')->get();
        return view('backend.users.create')->with(compact('roles'))->with(compact('projects'))->with(compact('countries'));
    }

    public function store(Request $request)
    {

        if($request->input('role') == Role::$TEAM_LEADER  || $request->input('role') == Role::$TEAM_MEMBER ){
            $validator = Validator::make($request->all(),[
                'name'               => 'required|string|max:255',
                'email'              => 'required|string|email|max:255|unique:users',
                'firstname'          => 'required',
                'lastname'           => 'required',
                'primaryphonenumber' => 'required|numeric|unique:projectappliers,primaryphonenumber',
                'alterphonenumber'   => 'required|numeric|unique:projectappliers,alterphonenumber',
                'mememail'           => 'required|email|unique:projectappliers,email',
                'dob'                => 'required',
                'address1'           => 'required',
                //'address2'           => 'required',
                'country'            => 'required',
                'state'              => 'required',
                'city'               => 'required',
                'zipcode'            => 'required',
                'referralSource'     => 'required',
                'sponsorCode'        => 'required',
                'citizenship'        => 'required',
                'currentUniversity'  => 'required',
                'major'              => 'required',
                'currentGPA'         => 'required',
                'attendmedischool'   => 'required',
                'graduationDate'     => 'required',
                'projectId'          => 'required',
            ],[ 
                /*'name.required' => 'The :attribute field can not be blank value.'*/
                'primaryphonenumber.unique' => 'The Primary Phone Number has already been taken.',
                'alterphonenumber.unique'   => 'The Alternative Phone Number has already been taken.',
                'email.unique'              => 'The User Email has already been taken.',
                'mememail.unique'           => 'The Email has already been taken.',
            ]);
        }elseif ($request->input('role') == Role::$JUDGE ) {

            $validator = Validator::make($request->all(),[
                'resume'      => 'required|mimes:pdf,docx,docs',
                'firstname'   => 'required',
                'lastname'    => 'required',
                'address'     => 'required',
                'country'     => 'required',
                'state'       => 'required',
                'city'        => 'required',
                'judemail'       => 'required|email|unique:judge,email|unique:users,email',
                'phonenumber' => 'required|numeric|unique:judge,phonenumber',
            ],[ 
                'phonenumber.unique' => 'The Phone Number has already been taken.',
                'email.unique'              => 'The User Email has already been taken.',
                'judemail.unique'           => 'The Email has already been taken.',
            ]);
            
        }elseif ($request->input('role') == Role::$INTERN ) {

            $validator = Validator::make($request->all(),[
                'resume'      => 'required|mimes:pdf,docx,docs',
                'firstname'   => 'required',
                'lastname'    => 'required',
                'address'     => 'required',
                'country'     => 'required',
                'state'       => 'required',
                'city'        => 'required',
                'judemail'       => 'required|email|unique:internships,email|unique:users,email',
                'phonenumber' => 'required|numeric|unique:internships,phonenumber',
            ],[ 
                'phonenumber.unique' => 'The Phone Number has already been taken.',
                'email.unique'              => 'The User Email has already been taken.',
                'judemail.unique'           => 'The Email has already been taken.',
            ]);
            
        }elseif ($request->input('role') == Role::$AMBASSADOR ) {

            $validator = Validator::make($request->all(),[
                'resume'      => 'required|mimes:pdf,docx,docs',
                'firstname'   => 'required',
                'lastname'    => 'required',
                'address'     => 'required',
                'country'     => 'required',
                'state'       => 'required',
                'city'        => 'required',
                'judemail'       => 'required|email|unique:ambassador,email|unique:users,email',
                'phonenumber' => 'required|numeric|unique:ambassador,phonenumber',
            ],[ 
                'phonenumber.unique' => 'The Phone Number has already been taken.',
                'email.unique'              => 'The User Email has already been taken.',
                'judemail.unique'           => 'The Email has already been taken.',
            ]);
            
        }else{
            $validator = Validator::make($request->all(),[
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
            ]);
        }

        if($validator->fails()){
            $errors = $validator->messages();
            return redirect()->route('users.create')->withInput()
                                ->with('errors',$errors);
        }else{

            if($request->input('role') == Role::$JUDGE || $request->input('role') == Role::$INTERN || $request->input('role') == Role::$AMBASSADOR ){
                $pass = $this->getRandomPass(6);
                $user = new User();
                $user->name   = $request->input('name');
                $user->email  = $request->input('email');
                $user->roleid = $request->input('role');
                $user->password = bcrypt($pass);
                
                if($user->save()){

                    $date = new DateTime();
                    $prifix = $date->format('y_m_d_H_i_s_');

                    $file = $request->file('resume');

                    if($request->input('role') == Role::$JUDGE){
                        $newRecord = new Judge();
                    }elseif($request->input('role') == Role::$INTERN){
                        $newRecord = new Internship();
                    }elseif($request->input('role') == Role::$AMBASSADOR){
                        $newRecord = new Ambassador();
                    }
                    $newRecord->firstname   = $request->input('firstname');
                    $newRecord->lastname    = $request->input('lastname');
                    $newRecord->email       = $request->input('judemail');
                    $newRecord->phonenumber = $request->input('phonenumber');
                    $newRecord->address     = $request->input('address');
                    $newRecord->country     = $request->input('country');
                    $newRecord->state       = $request->input('state');
                    $newRecord->city        = $request->input('city');
                    $newRecord->resume      = $prifix.$file->getClientOriginalName();

                    if($newRecord->save()){
                        //mail notification
                        $mail_details = array(
                            'tomail' => $user->email,
                        );
                        $data = array(
                            'mail'             => 'User',
                            'person_name'      => strtoupper($user->name),
                            'person_email'     => $user->email,
                            'password'         => $pass,
                        );
                        Mail::send(['html'=>'emails.mail'], $data, function($message) use($mail_details){
                            $message->to( $mail_details['tomail'] , 'AIT');
                            $message->subject('Sprowtt Launch Pad Account Details');
                            $message->from('Admin@sprowttlaunchpad.com','Administrator');
                        });

                        //Moving uploaded file to server
                        $destinationPath = 'resume';
                        $file->move($destinationPath,$prifix.$file->getClientOriginalName());

                        return redirect()->route('BEusers')
                            ->with('success','User has been created and password sent by mail to created user successfully!');
                    }
                }
            }

            if($request->input('role') == Role::$TEAM_LEADER || $request->input('role') == Role::$TEAM_MEMBER ){
                $date = new DateTime();
                $prifix = $date->format('y_m_d_H_i_s_');
                
                $destinationPath = 'projectApply';
                $file = $request->file('resume');
                $file->move($destinationPath,$prifix.$file->getClientOriginalName());

                $member = new ProjectAppliers();
                $member->project_id          = $request->input('projectId');
                $member->firstname           = $request->input('firstname');
                $member->lastname            = $request->input('lastname');
                $member->email               = $request->input('mememail');
                $member->primaryphonenumber  = $request->input('primaryphonenumber');
                $member->alterphonenumber    = $request->input('alterphonenumber');
                $member->dob                 = $request->input('dob');
                $member->address1            = $request->input('address1');
                //$member->address2            = $request->input('address2');
                $member->country             = $request->input('country');
                $member->state               = $request->input('state');
                $member->city                = $request->input('city');
                $member->zipcode             = $request->input('zipcode');
                $member->referralSource      = $request->input('referralSource');
                $member->sponsorCode         = $request->input('sponsorCode');
                $member->citizenship         = $request->input('citizenship');
                $member->currentUniversity   = $request->input('currentUniversity');
                $member->major               = $request->input('major');
                $member->currentGPA          = $request->input('currentGPA');
                $member->attendmedischool    = $request->input('attendmedischool');
                $member->graduationDate      = $request->input('graduationDate');
                if($user->roleid == Role::$TEAM_LEADER ){
                    $member->interestedtl    = 'yes';
                }elseif ($user->roleid == Role::$TEAM_LEADER) {
                    $member->interestedtl    = 'no';
                }
                $member->resume              = $prifix.$file->getClientOriginalName();

                if($member->save()){
                    if($request->input('role') == Role::$TEAM_LEADER){
                        if($request->input('leaderReplace') == 'replace'){
                            $replace = ProjectLeader::where('project_id','=',$member->project_id)->delete();
                        }
                        $precheck = ProjectLeader::where('project_id','=',$member->project_id)->get();

                        if($precheck->isEmpty()){
                            $projectLeader = new ProjectLeader();
                            $projectLeader->project_id = $member->project_id;
                            $projectLeader->applier_id = $member->id;
                            if($projectLeader->save()){
                                return redirect()->route('BEusers')
                                    ->with('success','User has been created and as Team Leader successfully!');
                            }
                        }
                    }elseif ($request->input('role') == Role::$TEAM_MEMBER) {
                        $projectMember = new ProjectMember();
                        $projectMember->project_id = $member->project_id;
                        $projectMember->applier_id = $member->id;

                        if($projectMember->save()){
                            return redirect()->route('BEusers')
                            ->with('success','User has been created and as Team Member successfully!');
                        }
                    }
                }
            }
            /*return redirect()->route('BEusers')
                        ->with('success','User has been created successfully!');*/
            /*}*/
        }
    }

    public function view($id){
        $user = User::find($id);

        if($user->roleid == Role::$JUDGE){
            $query = Judge::select('*')->where('email','=',$user->email)->first();
        }

        if($user->roleid == Role::$INTERN){
            $query = Internship::select('*')->where('email','=',$user->email)->first();
        }

        if($user->roleid == Role::$AMBASSADOR){
            $query = Ambassador::select('*')->where('email','=',$user->email)->first();
        }

        $query->firstname = ucfirst($query->firstname);
        $query->lastname  = ucfirst($query->lastname);
        $query->country   = $this->getCountry($query->country);
        $query->state     = $this->getState($query->state);
        $query->city      = $this->getCity($query->city);

        $url = "https://docs.google.com/gview?url=".asset('resume/'.$query->resume .'')."&embedded=true";

        return view('backend.users.view')->with(compact('query'))->with(compact('url'));
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

    public function checkProject($id){
        if($id){
            $checkLeader = ProjectLeader::where('project_id','=',$id)->get();
            if(!$checkLeader->isEmpty()){
                $data = array(
                    'status' => 1,
                );
            }else{
                $data = array(
                    'status' => 0,
                );
            }
        }
        return json_encode($data);
    }

    public function grid()
    {        

    	$user = Auth::user();

        $query = User::select('*')->whereNotIn('id', [$user->id])->get();
        


        return Datatables::of($query)
            ->addIndexColumn()
            ->editColumn('name',function($model) {
                return  ucfirst($model->name);
            })
            ->editColumn('roleid',function($model) {
                return  Role::getRole($model->roleid);
            })
            ->addColumn('action', function($model) {  
                return '<a href="'. route('users.view', $model->id) .'" class="btn btn-primary btn-xs" type="button" aria-pressed="false">View</a>';  
            })
            ->make(true);   
    }
}
