<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Tombstone;
use App\TombstoneVote;
use App\FirstRound;
use App\ProjectAppliers;



class ScoreboardController extends Controller
{
    public function index($tomb_id)
    {

    	//left team checking for place or not in chart
    	$ltChecking = FirstRound::where('project_id','=',$tomb_id)->get();

    	$ltVote = '';
    	$ltTeam = '';
    	$ltassignLeader = '';
    	$ltassignMember = '';
    	if(!$ltChecking->isEmpty()){
	    	//left team vote count for header
	    	$ltVote = TombstoneVote::where('tomb_id','=',$tomb_id)->count();
	    	$ltVote = str_pad( $ltVote, 5, "0", STR_PAD_LEFT );

	    	//left team name for header
	    	$ltTeam = Tombstone::find($tomb_id);
	    	$ltTeam = $ltTeam->team_name;


            //left project name for header
            $ltProject = Tombstone::find($tomb_id);
            $ltProject = $ltProject->name;

	    	//left team leader for body
    		$ltassignLeader = ProjectAppliers::select('*')
                ->join('project_leaders','project_leaders.applier_id','=','projectappliers.id')
                ->where('project_leaders.project_id','=',$tomb_id)->get();
            //left team members for body
        	$ltassignMember = ProjectAppliers::select('*')
                ->join('project_members','project_members.applier_id','=','projectappliers.id')
                ->where('project_members.project_id','=',$tomb_id)->get();

            /*$ltTeamMembers = array();
            foreach ($ltassignMember as $key => $value) {
            	$ltTeamMembers['members'][]= $value->firstname.' '.$value->lastname;
            	foreach ($ltassignLeader as $key => $Leadvalue) {
            		$ltTeamMembers['leader'][0] = $Leadvalue->firstname.' '.$Leadvalue->lastname;
            	}
            }*/


            //getting oppesite position team from chart
            $oppositePost = $this->getOppPost($tomb_id);

            //right team checking for place or not in chart
            $rtChecking = FirstRound::where('position','=',$oppositePost)->get();
            $rtVote = '';
    		$rtTeam = '';
    		$rtassignLeader = '';
    		$rtassignMember = '';
            if(!$rtChecking->isEmpty()){

            	$rtProjectId = $rtChecking[0]->project_id;

            	//left team vote count for header
		    	$rtVote = TombstoneVote::where('tomb_id','=',$rtProjectId)->count();
		    	$rtVote = str_pad( $rtVote, 5, "0", STR_PAD_LEFT );

		    	//left team name for header
		    	$rtTeam = Tombstone::find($rtProjectId);
		    	$rtTeam = $rtTeam->team_name;


                //left project name for header
                $rtProject = Tombstone::find($rtProjectId);
                $rtProject = $rtProject->name;




		    	//left team leader for body
	    		$rtassignLeader = ProjectAppliers::select('*')
	                ->join('project_leaders','project_leaders.applier_id','=','projectappliers.id')
	                ->where('project_leaders.project_id','=',$rtProjectId)->get();

	            //left team members for body
	        	$rtassignMember = ProjectAppliers::select('*')
	                ->join('project_members','project_members.applier_id','=','projectappliers.id')
	                ->where('project_members.project_id','=',$rtProjectId)->get();

	            /*$rtTeamMembers = array();
	            foreach ($rtassignMember as $key => $value) {
	            	$rtTeamMembers['members'][]= $value->firstname.' '.$value->lastname;
	            	foreach ($rtassignLeader as $key => $Leadvalue) {
	            		$rtTeamMembers['leader'][0] = $Leadvalue->firstname.' '.$Leadvalue->lastname;
	            	}
	            }*/
            }
    	}
    	return view('frontend.scoreboard')->with(compact('ltVote','ltTeam','ltassignLeader','ltassignMember','ltProject','rtProject','rtVote','rtTeam','rtassignLeader','rtassignMember'));
    }


    private function getOppPost($tomb_id)
    {
    	$currentPost = FirstRound::where('project_id','=',$tomb_id)->first();
    	if($currentPost->position == "1"){
    		$oppPost = "2";
    	}elseif ($currentPost->position == "2") {
    		$oppPost = "1";
    	}elseif ($currentPost->position == "3") {
    		$oppPost = "4";
    	}elseif ($currentPost->position == "4") {
    		$oppPost = "3";
    	}elseif ($currentPost->position == "5") {
    		$oppPost = "6";
    	}elseif ($currentPost->position == "6") {
    		$oppPost = "5";
    	}elseif ($currentPost->position == "7") {
    		$oppPost = "8";
    	}elseif ($currentPost->position == "8") {
    		$oppPost = "7";
    	}elseif ($currentPost->position == "9") {
    		$oppPost = "10";
    	}elseif ($currentPost->position == "10") {
    		$oppPost = "9";
    	}elseif ($currentPost->position == "11") {
    		$oppPost = "12";
    	}elseif ($currentPost->position == "12") {
    		$oppPost = "11";
    	}elseif ($currentPost->position == "13") {
    		$oppPost = "14";
    	}elseif ($currentPost->position == "14") {
    		$oppPost = "13";
    	}elseif ($currentPost->position == "15") {
    		$oppPost = "16";
    	}elseif ($currentPost->position == "16") {
    		$oppPost = "15";
    	}elseif ($currentPost->position == "17") {
    		$oppPost = "18";
    	}elseif ($currentPost->position == "18") {
    		$oppPost = "17";
    	}
    	return $oppPost;
    }


}
