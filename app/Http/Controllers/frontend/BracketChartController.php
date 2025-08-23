<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Tombstone;
use App\TombstoneVote;
use App\FirstRound;
use App\SecondRound;
use App\Sweet16Round;
use App\Elite8Round;
use App\ProjectAppliers;

class BracketChartController extends Controller
{
    public function index()
    {
        /*First Round*/
    	//left team checking for place or not in chart
    	$frTeams = FirstRound::select('*')->get();
    	$frGroup = array();
    	foreach ($frTeams as $key => $value) {
    		if($value['position'] == '1'){
    			$frGroup[] = $value['project_id'];
    		}elseif($value['position'] == '3'){
    			$frGroup[] = $value['project_id'];
    		}elseif($value['position'] == '5'){
    			$frGroup[] = $value['project_id'];
    		}elseif($value['position'] == '7'){
    			$frGroup[] = $value['project_id'];
    		}elseif($value['position'] == '9'){
    			$frGroup[] = $value['project_id'];
    		}elseif($value['position'] == '11'){
    			$frGroup[] = $value['project_id'];
    		}elseif($value['position'] == '13'){
    			$frGroup[] = $value['project_id'];
    		}elseif($value['position'] == '15'){
    			$frGroup[] = $value['project_id'];
    		}
    	}
    	$frBcDetails = array();
    	foreach ($frGroup as $key => $value) {
    		$frRecord = array();
    		$ltChecking = FirstRound::where('project_id','=',$value)->get();
    		$ltTeam = '';
	    	if(!$ltChecking->isEmpty()){
		    	//left team details for first round
		    	$ltTeam = Tombstone::find($value);
		    	$ltCount = TombstoneVote::where('tomb_id','=',$value)->count();
		    	$ltCreated = FirstRound::where('project_id','=',$value)->first();
		    	
		    	$frRecord['lpName']     = $ltTeam->name;
		    	$frRecord['ltName']     = $ltTeam->team_name;
		    	$frRecord['ltCount']    = str_pad( $ltCount, 5, "0", STR_PAD_LEFT );
		    	$frRecord['ltCreated']  = date("d M Y-H:i",strtotime($ltCreated->created_at));
                $frRecord['round_name'] = 'First Round';


		    	$oppositePost = $this->getOppPost($value);
	            //right team checking for place or not in chart
	            $rtChecking = FirstRound::where('position','=',$oppositePost)->get();
	    		
	    		$rtTeam = '';
	            if(!$rtChecking->isEmpty()){
	            	$rtProjectId = $rtChecking[0]->project_id;
	            	//right team details for first round
	            	$rtTeam = Tombstone::find($rtProjectId);
	            	$rtCount = TombstoneVote::where('tomb_id','=',$rtProjectId)->count();
	            	$rtCreated = FirstRound::where('project_id','=',$rtProjectId)->first();

	            	$frRecord['rpName']    = $rtTeam->name;
	            	$frRecord['rtName']    = $rtTeam->team_name;
	            	$frRecord['rtCount']   = str_pad( $rtCount, 5, "0", STR_PAD_LEFT );
	            	$frRecord['rtCreated'] = date("d M Y-H:i",strtotime($rtCreated->created_at));
	            }else{
                    $frRecord['rpName']    = 'NOT SELECTED';
                    $frRecord['rtName']    = 'NOT SELECTED';
                    $frRecord['rtCount']   = '00000';
                    $frRecord['rtCreated'] = 'NOT SELECTED';
                }
	            $frRecord['viewid'] = $ltTeam->id;
		    }

		    $frBcDetails[] = $frRecord;
    	}


        /*Second Round*/
        //left team checking for place or not in chart
        $srTeams = SecondRound::select('*')->get();
        $srGroup = array();
        foreach ($srTeams as $key => $value) {
            if($value['position'] == 'sec-col-1'){
                $srGroup[] = $value['project_id'];
            }elseif($value['position'] == 'sec-col-3'){
                $srGroup[] = $value['project_id'];
            }elseif($value['position'] == 'sec-col-5'){
                $srGroup[] = $value['project_id'];
            }elseif($value['position'] == 'sec-col-7'){
                $srGroup[] = $value['project_id'];
            }
        }
        $srBcDetails = array();
        foreach ($srGroup as $key => $value) {
            $srRecord = array();
            $srltChecking = SecondRound::where('project_id','=',$value)->get();
            $srltTeam = '';
            if(!$srltChecking->isEmpty()){
                //left team details for first round
                $srltTeam = Tombstone::find($value);
                $srltCount = TombstoneVote::where('tomb_id','=',$value)->count();
                $srltCreated = SecondRound::where('project_id','=',$value)->first();
                
                $srRecord['lpName']     = $srltTeam->name;
                $srRecord['ltName']     = $srltTeam->team_name;
                $srRecord['ltCount']    = str_pad( $srltCount, 5, "0", STR_PAD_LEFT );
                $srRecord['ltCreated']  = date("d M Y-H:i",strtotime($srltCreated->created_at));
                $srRecord['round_name'] = 'Second Round';


                $srOppositePost = $this->getSecOppPost($value);
                //right team checking for place or not in chart
                $srrtChecking = SecondRound::where('position','=',$srOppositePost)->get();
                
                $srrtTeam = '';
                if(!$srrtChecking->isEmpty()){
                    $srrtProjectId = $srrtChecking[0]->project_id;
                    //right team details for first round
                    $srrtTeam = Tombstone::find($srrtProjectId);
                    $srrtCount = TombstoneVote::where('tomb_id','=',$srrtProjectId)->count();
                    $srrtCreated = SecondRound::where('project_id','=',$srrtProjectId)->first();

                    $srRecord['rpName']    = $srrtTeam->name;
                    $srRecord['rtName']    = $srrtTeam->team_name;
                    $srRecord['rtCount']   = str_pad( $srrtCount, 5, "0", STR_PAD_LEFT );
                    $srRecord['rtCreated'] = date("d M Y-H:i",strtotime($srrtCreated->created_at));
                }else{
                    $srRecord['rpName']    = 'NOT SELECTED';
                    $srRecord['rtName']    = 'NOT SELECTED';
                    $srRecord['rtCount']   = '00000';
                    $srRecord['rtCreated'] = 'NOT SELECTED';
                }
                $srRecord['viewid'] = $srltTeam->id;
            }

            $srBcDetails[] = $srRecord;
        }



        /*Sweet16 Round*/
        //left team checking for place or not in chart
        $sw16Teams = Sweet16Round::select('*')->get();
        $sw16Group = array();
        foreach ($sw16Teams as $key => $value) {
            if($value['position'] == 'third-col-1'){
                $sw16Group[] = $value['project_id'];
            }elseif($value['position'] == 'third-col-3'){
                $sw16Group[] = $value['project_id'];
            }
        }
        $sw16BcDetails = array();
        foreach ($sw16Group as $key => $value) {
            $sw16Record = array();
            $sw16ltChecking = Sweet16Round::where('project_id','=',$value)->get();
            $sw16ltTeam = '';
            if(!$sw16ltChecking->isEmpty()){
                //left team details for first round
                $sw16ltTeam = Tombstone::find($value);
                $sw16ltCount = TombstoneVote::where('tomb_id','=',$value)->count();
                $sw16ltCreated = Sweet16Round::where('project_id','=',$value)->first();
                
                $sw16Record['lpName']     = $sw16ltTeam->name;
                $sw16Record['ltName']     = $sw16ltTeam->team_name;
                $sw16Record['ltCount']    = str_pad( $sw16ltCount, 5, "0", STR_PAD_LEFT );
                $sw16Record['ltCreated']  = date("d M Y-H:i",strtotime($sw16ltCreated->created_at));
                $sw16Record['round_name'] = 'Sweet16 Round';


                $sw16OppositePost = $this->getSwt16OppPost($value);
                //right team checking for place or not in chart
                $sw16rtChecking = Sweet16Round::where('position','=',$sw16OppositePost)->get();
                
                $sw16rtTeam = '';
                if(!$sw16rtChecking->isEmpty()){
                    $sw16rtProjectId = $sw16rtChecking[0]->project_id;
                    //right team details for first round
                    $sw16rtTeam    = Tombstone::find($sw16rtProjectId);
                    $sw16rtCount   = TombstoneVote::where('tomb_id','=',$sw16rtProjectId)->count();
                    $sw16rtCreated = Sweet16Round::where('project_id','=',$sw16rtProjectId)->first();

                    $sw16Record['rpName']    = $sw16rtTeam->name;
                    $sw16Record['rtName']    = $sw16rtTeam->team_name;
                    $sw16Record['rtCount']   = str_pad( $sw16rtCount, 5, "0", STR_PAD_LEFT );
                    $sw16Record['rtCreated'] = date("d M Y-H:i",strtotime($sw16rtCreated->created_at));
                }else{
                    $sw16Record['rpName']    = 'NOT SELECTED';
                    $sw16Record['rtName']    = 'NOT SELECTED';
                    $sw16Record['rtCount']   = '00000';
                    $sw16Record['rtCreated'] = 'NOT SELECTED';
                }
                $sw16Record['viewid'] = $sw16ltTeam->id;
            }

            $sw16BcDetails[] = $sw16Record;
        }


        /*Elite8 Round*/
        //left team checking for place or not in chart
        $elt8Teams = Elite8Round::select('*')->get();
        $elt8Group = array();
        foreach ($elt8Teams as $key => $value) {
            if($value['position'] == 'elite-col-1'){
                $elt8Group[] = $value['project_id'];
            }
        }

        $elt8BcDetails = array();
        foreach ($elt8Group as $key => $value) {
            $elt8Record = array();
            $elt8ltChecking = Elite8Round::where('project_id','=',$value)->get();
            $elt8ltTeam = '';
            if(!$elt8ltChecking->isEmpty()){
                //left team details for first round
                $elt8ltTeam = Tombstone::find($value);
                $elt8ltCount = TombstoneVote::where('tomb_id','=',$value)->count();
                $elt8ltCreated = Elite8Round::where('project_id','=',$value)->first();
                
                $elt8Record['lpName']     = $elt8ltTeam->name;
                $elt8Record['ltName']     = $elt8ltTeam->team_name;
                $elt8Record['ltCount']    = str_pad( $elt8ltCount, 5, "0", STR_PAD_LEFT );
                $elt8Record['ltCreated']  = date("d M Y-H:i",strtotime($elt8ltCreated->created_at));
                $elt8Record['round_name'] = 'Elite8 Round';

                $elt8OppositePost = $this->getSwt16OppPost($value);
                //right team checking for place or not in chart
                $elt8rtChecking = Elite8Round::where('position','=',$elt8OppositePost)->get();
                
                $elt8rtTeam = '';
                if(!$elt8rtChecking->isEmpty()){
                    $elt8rtProjectId = $elt8rtChecking[0]->project_id;
                    //right team details for first round
                    $elt8rtTeam = Tombstone::find($elt8rtProjectId);
                    $elt8rtCount = TombstoneVote::where('tomb_id','=',$elt8rtProjectId)->count();
                    $elt8rtCreated = Elite8Round::where('project_id','=',$elt8rtProjectId)->first();

                    $elt8Record['rpName']    = $elt8rtTeam->name;
                    $elt8Record['rtName']    = $elt8rtTeam->team_name;
                    $elt8Record['rtCount']   = str_pad( $elt8rtCount, 5, "0", STR_PAD_LEFT );
                    $elt8Record['rtCreated'] = date("d M Y-H:i",strtotime($elt8rtCreated->created_at));
                }else{
                    $elt8Record['rpName']    = 'NOT SELECTED';
                    $elt8Record['rtName']    = 'NOT SELECTED';
                    $elt8Record['rtCount']   = '00000';
                    $elt8Record['rtCreated'] = 'NOT SELECTED';
                }
                $elt8Record['viewid'] = $elt8ltTeam->id;
            }
            $elt8BcDetails[] = $elt8Record;
        }

        return view('frontend.bracketchart')->with(compact('frBcDetails'))->with(compact('srBcDetails'))->with(compact('sw16BcDetails'))->with(compact('elt8BcDetails'));
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

    private function getSecOppPost($tomb_id)
    {
        $currentPost = SecondRound::where('project_id','=',$tomb_id)->first();
        if($currentPost->position == "sec-col-1"){
            $oppPost = "sec-col-2";
        }elseif ($currentPost->position == "sec-col-2") {
            $oppPost = "sec-col-1";
        }elseif ($currentPost->position == "sec-col-3") {
            $oppPost = "sec-col-4";
        }elseif ($currentPost->position == "sec-col-4") {
            $oppPost = "sec-col-3";
        }elseif ($currentPost->position == "sec-col-5") {
            $oppPost = "sec-col-6";
        }elseif ($currentPost->position == "sec-col-6") {
            $oppPost = "sec-col-7";
        }elseif ($currentPost->position == "sec-col-7") {
            $oppPost = "sec-col-8";
        }elseif ($currentPost->position == "sec-col-8") {
            $oppPost = "sec-col-7";
        }
        return $oppPost;
    }

    private function getSwt16OppPost($tomb_id)
    {
        $currentPost = Sweet16Round::where('project_id','=',$tomb_id)->first();
        if($currentPost->position == "third-col-1"){
            $oppPost = "third-col-2";
        }elseif ($currentPost->position == "third-col-2") {
            $oppPost = "third-col-1";
        }elseif ($currentPost->position == "third-col-3") {
            $oppPost = "third-col-4";
        }elseif ($currentPost->position == "third-col-4") {
            $oppPost = "third-col-3";
        }
        return $oppPost;
    }







}
