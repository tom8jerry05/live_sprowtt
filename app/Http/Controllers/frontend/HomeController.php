<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Tombstone;
use App\ProjectAppliers;

use App\TombstoneQues;
use App\User;
use App\Role;
use App\Judge;
use App\TombstoneVote;
use Jenssegers\Agent\Agent;
use Validator;
use Cookie;
use Mail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    public function index()
    {
    	$tombstoneData = Tombstone::select('*')
            ->orderBy(DB::raw('-place_position'),'DESC')
            ->get();
    	foreach ($tombstoneData as $key => $value) {
    		if($value->video_option == 'upload'){
    			$value->video_link  = url('/tombstone/'.$value->video_link);
    		}
    		$value->image_link  = url('/tombstone/'.$value->image_link);
    	}

        $agent = new Agent();
        if($agent->isPhone()){
            $range = 1;
        }elseif($agent->isTablet()){
            $range = 2;
        }else{
            $range = 3;
        }

    	return view('frontend.home')->with(compact('tombstoneData'))->with(compact('range'));
    }



    public function allprojects(){
        return view('frontend.samplechallenges');
    }

    public function tombStonedetail($id)
    {
        $tombstone = Tombstone::find($id);
        if($tombstone->video_option == 'upload'){
            $tombstone->video_link = url('/tombstone/'.$tombstone->video_link);
        }
        $tombstone->image_link  = url('/tombstone/'.$tombstone->image_link);

        if($tombstone->pres_video_option == 'upload'){
            $tombstone->pres_video_link = url('/tombstone/'.$tombstone->pres_video_link);
        }
        $tombstone->pdf_link = "https://docs.google.com/gview?url=".asset('tombstone/'.$tombstone->pdf_link .'')."&embedded=true";
        
        $assignLeader = ProjectAppliers::select('*')
                ->join('project_leaders','project_leaders.applier_id','=','projectappliers.id')
                ->where('project_leaders.project_id','=',$id)->first();

        $assignMember = ProjectAppliers::select('*')
                ->join('project_members','project_members.applier_id','=','projectappliers.id')
                ->where('project_members.project_id','=',$id)->get();

        $judges = Judge::select('*')
                    ->where('project_id','=',$id)->get();

        if($assignMember->isEmpty()){
            $assignMember =array();
        }

        return view('frontend.tombstonedetail')->with(compact('tombstone'))
            ->with(compact('assignLeader'))->with(compact('assignMember'))
            ->with(compact('judges'));
    }

    public function askquestion(Request $request, $id)
    {
        $validator = Validator::make($request->all(),[
            'question'   => 'required',
            'ques_email' => 'required',
        ]);
        if($validator->fails()){
            $data = array(
                'status' => 0,
                'error'  => $validator->messages()->toArray(),
            );
            return json_encode($data);
        }else{
            $tombstoneQues = new TombstoneQues();
            $tombstoneQues->tombstone_id = $id;
            $tombstoneQues->ques_email   = $request->input('ques_email');
            $tombstoneQues->question     = $request->input('question');
            if($tombstoneQues->save()){

                $tombstone = Tombstone::find($tombstoneQues->tombstone_id);

                $adminUser = User::where('roleid','=',Role::$SUPER_ADMIN)->first();
                
                //admin mail notification
                $mail_details = array(
                    'adminMail'=> $adminUser->email,
                );
                $data = array(
                    'mail'             => 'askQuestion',
                    'question'         => $tombstoneQues->question,
                    'project_name'         => $tombstone->name,
                );
                Mail::send(['html'=>'emails.mail'], $data, function($message) use($mail_details){
                    $message->to( $mail_details['adminMail'] , 'Super Admin');
                    $message->subject('New question received about project');
                    $message->from('Admin@sprowtt.com','Administrator');
                });
                $data = array('status'=> 1);
            }else{
                $data = array('status'=> 0);
            }
            return json_encode($data);
        }
    }


    public function pageLogin(Request $request)
    {
        $email = $request->email;
        $password = $request->password;

        if(Auth::guard('web')->attempt(['email'=> $email,'password' => $password])){
            $msg = array(
                'status' =>'success' ,
                'message'=> 'Login Successful' 
            );
            return response()->json($msg);
        }else{
            $msg = array(
                'status' =>'error' ,
                'message'=> 'Login Failed !' 
            );
            return response()->json($msg);
        }
    }


    public function voteNow($id)
    {
        if(!Auth::guest()){
            $user = Auth::user();
            if( $user->roleid != Role::$JUDGE)
            {
                $checking = TombstoneVote::where('tomb_id','=',$id)
                    ->where('user_id','=',$user->id)->get();
                if($checking->isEmpty()){

                    $vote = new TombstoneVote();
                    $vote->user_id  = $user->id;
                    $vote->tomb_id  = $id;
                    $vote->vote     = '1';
                    if($vote->save()){
                        $msg = array(
                            'status' =>'success' ,
                            'message'=> 'You voted to this project.!' 
                        );
                        return response()->json($msg);
                    }
                }else{
                    $msg = array(
                        'status' =>'error' ,
                        'message'=> 'You already vote to this project.!' 
                    );
                    return response()->json($msg);
                }
            }else{
                $msg = array(
                    'status' =>'error' ,
                    'message'=> 'judges are not allowed to vote for projects.!' 
                );
                return response()->json($msg);
            }
        }else{
            $msg = array(
                'status' =>'error' ,
                'message'=> 'You need to login to vote this project.!' 
            );
            return response()->json($msg);
        }
    }
}
