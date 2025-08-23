<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Jenssegers\Agent\Agent;
use App\Tombstone;
use App\ProjectAppliers;
use App\ProjectLeader;
use App\ProjectMember;
use App\FirstRound;
use App\SecondRound;
use App\Sweet16Round;
use App\Elite8Round;
use App\Championship;
use App\Event;

class StartupchallengesController extends Controller
{
    public function index()
    {
        $agent = new Agent();
        if($agent->isPhone()){
            $range = 1;
        }elseif($agent->isTablet()){
            $range = 2;
        }else{
            $range = 3;
        }

        $results = Tombstone::select('*')->paginate($range);
        foreach ($results as $key => $value) {
            if($value->video_option == 'upload'){
                $value->video_link  = url('/tombstone/'.$value->video_link);
            }
            $value->image_link  = url('/tombstone/'.$value->image_link);
        }
        $name = '';
        $agency = '';

        //chart Data
        $event = Event::select('*')->first();
        

        //First Round Record (Changes)
        $appliersData = FirstRound::join('projectappliers','projectappliers.project_id','=','first_round.project_id')
            ->join('tombstones','tombstones.id','=','first_round.project_id')
            ->select('tombstones.name','tombstones.team_name','projectappliers.*','first_round.event_id','first_round.id as fround_id','first_round.position','first_round.event_id')
            ->where('projectappliers.interestedtl','=','yes')
            ->get();
        for ($x = 0; $x <= 15; $x++) {
            $appliersRecord[$x]=[];
        }
		
        foreach ($appliersData as $value) {
            $record = [];
            $record['project']    = ucfirst($value->name);
            $record['team_name']    = ucfirst($value->team_name);
            $record['leader']     = ucfirst($value->firstname).' '.ucfirst($value->lastname);
            $record['school']     = $value->currentUniversity;
            $record['project_id'] = $value->project_id;
            $record['applier_id'] = $value->id;
            $record['event_id']   = $value->event_id;
            $record['fRound_id']  = $value->fround_id;
            $record['position']   = $value->position;
            $appliersRecord[($value->position)-1] = $record;
        }

        //Second Round Record
        $secRoundData = SecondRound::join('projectappliers','projectappliers.project_id','=','second_round.project_id')
            ->join('tombstones','tombstones.id','=','second_round.project_id')
            ->select('tombstones.name','tombstones.team_name','projectappliers.*','second_round.event_id','second_round.id as sround_id','second_round.position')
            ->where('projectappliers.interestedtl','=','yes')
            ->get();
        for ($x = 0; $x <= 7; $x++) {
            $secRoundRecord[$x]=[];
        }
        foreach ($secRoundData as $value) {
            $secRecord = [];
            $secRecord['project']    = ucfirst($value->name);
            $secRecord['team_name']  = ucfirst($value->team_name);
            $secRecord['leader']     = ucfirst($value->firstname).' '.ucfirst($value->lastname);
            $secRecord['school']     = $value->currentUniversity;
            $secRecord['project_id'] = $value->project_id;
            $secRecord['applier_id'] = $value->id;
            $secRecord['event_id']   = $value->event_id;
            $secRecord['sround_id']  = $value->sround_id;
            $secRecord['position']   = $value->position;
            $secRoundRecord[str_replace("sec-col-", "", $value->position)-1] = $secRecord;
        }


        //Sweet16 Round Record
        $swt16RoundData = Sweet16Round::join('projectappliers','projectappliers.project_id','=','sweet_16.project_id')
            ->join('tombstones','tombstones.id','=','sweet_16.project_id')
            ->select('tombstones.name','tombstones.team_name','projectappliers.*','sweet_16.event_id','sweet_16.id as swtround_id','sweet_16.position')
            ->where('projectappliers.interestedtl','=','yes')
            ->get();
        for ($x = 0; $x <= 3; $x++) {
            $swt16RoundRecord[$x]=[];
        }
        foreach ($swt16RoundData as $value) {
            $swtRecord = [];
            $swtRecord['project']    = ucfirst($value->name);
            $swtRecord['team_name']  = ucfirst($value->team_name);
            $swtRecord['leader']     = ucfirst($value->firstname).' '.ucfirst($value->lastname);
            $swtRecord['school']     = $value->currentUniversity;
            $swtRecord['project_id'] = $value->project_id;
            $swtRecord['applier_id'] = $value->id;
            $swtRecord['event_id']   = $value->event_id;
            $swtRecord['swtround_id']  = $value->swtround_id;
            $swt16RoundRecord[str_replace("third-col-", "", $value->position)-1] = $swtRecord;
        }

        //Elite Round Record
        $elt8RoundData = Elite8Round::join('projectappliers','projectappliers.project_id','=','elite_8.project_id')
            ->join('tombstones','tombstones.id','=','elite_8.project_id')
            ->select('tombstones.name','tombstones.team_name','projectappliers.*','elite_8.event_id','elite_8.id as eliteround_id','elite_8.position')
            ->where('projectappliers.interestedtl','=','yes')
            ->get();
        for ($x = 0; $x <= 1; $x++) {
            $elt8RoundRecord[$x]=[];
        }
        foreach ($elt8RoundData as $value) {
            $eltRecord = [];
            $eltRecord['project']        = ucfirst($value->name);
            $eltRecord['team_name']      = ucfirst($value->team_name);
            $eltRecord['leader']         = ucfirst($value->firstname).' '.ucfirst($value->lastname);
            $eltRecord['school']         = $value->currentUniversity;
            $eltRecord['project_id']     = $value->project_id;
            $eltRecord['applier_id']     = $value->id;
            $eltRecord['event_id']       = $value->event_id;
            $eltRecord['eliteround_id']  = $value->eliteround_id;
            $elt8RoundRecord[str_replace("elite-col-", "", $value->position)-1] = $eltRecord;
        }

        //ChampionShip Record
        $championData = Championship::join('projectappliers','projectappliers.project_id','=','championship.project_id')
            ->join('tombstones','tombstones.id','=','championship.project_id')
            ->select('tombstones.name','tombstones.team_name','projectappliers.*','championship.event_id','championship.id as champ_id')
            ->where('projectappliers.interestedtl','=','yes')
            ->get();
        $championRecord = [];
        foreach ($championData as $key => $value) {
            $champRecord = [];
            $champRecord['project']        = ucfirst($value->name);
            $champRecord['team_name']      = ucfirst($value->team_name);
            $champRecord['leader']         = ucfirst($value->firstname).' '.ucfirst($value->lastname);
            $champRecord['school']         = $value->currentUniversity;
            $champRecord['project_id']     = $value->project_id;
            $champRecord['applier_id']     = $value->id;
            $champRecord['event_id']       = $value->event_id;
            $champRecord['champ_id']       = $value->champ_id;
            $championRecord[]              = $champRecord;
        }

    	return view('frontend.startupchallenges')
            ->with(compact('results'))
            ->with(compact('name'))
            ->with(compact('agency'))
            ->with(compact('appliersRecord'))
            ->with(compact('secRoundRecord'))
            ->with(compact('swt16RoundRecord'))
            ->with(compact('elt8RoundRecord'))
            ->with(compact('championRecord'));
    }


    public function tombSearch(Request $request)
    {
        $name = $request->input('projectName');
        $agency = $request->input('agency');

       


        $results = Tombstone::where('name', 'LIKE', "%{$name}%")
            ->orWhere('description', 'LIKE', "%{$name}%")
            ->where('agency','LIKE',"%{$agency}%")
            ->paginate();
        

        foreach ($results as $key => $value) {
            if($value->video_option == 'upload'){
                $value->video_link  = url('/tombstone/'.$value->video_link);
            }
            $value->image_link  = url('/tombstone/'.$value->image_link);
        }


        //$results->links = '';
        return view('frontend.startupchallenges')->with(compact('name'))->with(compact('agency'))->with(compact('results'));
    }

    

    public function chart()
    {

        $event = Event::select('*')->first();
        //$user = Auth::user();

        //First Round Record (Changes)
        $appliersData = FirstRound::join('projectappliers','projectappliers.project_id','=','first_round.project_id')
            ->join('tombstones','tombstones.id','=','first_round.project_id')
            ->select('tombstones.name','projectappliers.*','first_round.event_id','first_round.id as fround_id','first_round.position','first_round.event_id')
            ->where('projectappliers.interestedtl','=','yes')
            ->get();
        for ($x = 0; $x <= 15; $x++) {
            $appliersRecord[$x]=[];
        }
        foreach ($appliersData as $value) {
            $record = [];
            $record['project']    = ucfirst($value->name);
            $record['leader']     = ucfirst($value->firstname).' '.ucfirst($value->lastname);
            $record['school']     = $value->currentUniversity;
            $record['project_id'] = $value->project_id;
            $record['applier_id'] = $value->id;
            $record['event_id']   = $value->event_id;
            $record['fRound_id']  = $value->fround_id;
            $record['position']   = $value->position;
            $appliersRecord[($value->position)-1] = $record;
        }

        //Second Round Record
        $secRoundData = SecondRound::join('projectappliers','projectappliers.project_id','=','second_round.project_id')
            ->join('tombstones','tombstones.id','=','second_round.project_id')
            ->select('tombstones.name','projectappliers.*','second_round.event_id','second_round.id as sround_id','second_round.position')
            ->where('projectappliers.interestedtl','=','yes')
            ->get();
        for ($x = 0; $x <= 7; $x++) {
            $secRoundRecord[$x]=[];
        }
        foreach ($secRoundData as $value) {
            $secRecord = [];
            $secRecord['project']    = ucfirst($value->name);
            $secRecord['leader']     = ucfirst($value->firstname).' '.ucfirst($value->lastname);
            $secRecord['school']     = $value->currentUniversity;
            $secRecord['project_id'] = $value->project_id;
            $secRecord['applier_id'] = $value->id;
            $secRecord['event_id']   = $value->event_id;
            $secRecord['sround_id']  = $value->sround_id;
            $secRecord['position']   = $value->position;
            $secRoundRecord[str_replace("sec-col-", "", $value->position)-1] = $secRecord;
        }


        //Sweet16 Round Record
        $swt16RoundData = Sweet16Round::join('projectappliers','projectappliers.project_id','=','sweet_16.project_id')
            ->join('tombstones','tombstones.id','=','sweet_16.project_id')
            ->select('tombstones.name','projectappliers.*','sweet_16.event_id','sweet_16.id as swtround_id','sweet_16.position')
            ->where('projectappliers.interestedtl','=','yes')
            ->get();
        for ($x = 0; $x <= 3; $x++) {
            $swt16RoundRecord[$x]=[];
        }
        foreach ($swt16RoundData as $value) {
            $swtRecord = [];
            $swtRecord['project']    = ucfirst($value->name);
            $swtRecord['leader']     = ucfirst($value->firstname).' '.ucfirst($value->lastname);
            $swtRecord['school']     = $value->currentUniversity;
            $swtRecord['project_id'] = $value->project_id;
            $swtRecord['applier_id'] = $value->id;
            $swtRecord['event_id']   = $value->event_id;
            $swtRecord['swtround_id']  = $value->swtround_id;
            $swt16RoundRecord[str_replace("third-col-", "", $value->position)-1] = $swtRecord;
        }

        //Elite Round Record
        $elt8RoundData = Elite8Round::join('projectappliers','projectappliers.project_id','=','elite_8.project_id')
            ->join('tombstones','tombstones.id','=','elite_8.project_id')
            ->select('tombstones.name','projectappliers.*','elite_8.event_id','elite_8.id as eliteround_id','elite_8.position')
            ->where('projectappliers.interestedtl','=','yes')
            ->get();
        for ($x = 0; $x <= 1; $x++) {
            $elt8RoundRecord[$x]=[];
        }
        foreach ($elt8RoundData as $value) {
            $eltRecord = [];
            $eltRecord['project']        = ucfirst($value->name);
            $eltRecord['leader']         = ucfirst($value->firstname).' '.ucfirst($value->lastname);
            $eltRecord['school']         = $value->currentUniversity;
            $eltRecord['project_id']     = $value->project_id;
            $eltRecord['applier_id']     = $value->id;
            $eltRecord['event_id']       = $value->event_id;
            $eltRecord['eliteround_id']  = $value->eliteround_id;
            $elt8RoundRecord[str_replace("elite-col-", "", $value->position)-1] = $eltRecord;
        }

        //ChampionShip Record
        $championData = Championship::join('projectappliers','projectappliers.project_id','=','championship.project_id')
            ->join('tombstones','tombstones.id','=','championship.project_id')
            ->select('tombstones.name','projectappliers.*','championship.event_id','championship.id as champ_id')
            ->where('projectappliers.interestedtl','=','yes')
            ->get();
        $championRecord = [];
        foreach ($championData as $key => $value) {
            $champRecord = [];
            $champRecord['project']        = ucfirst($value->name);
            $champRecord['leader']         = ucfirst($value->firstname).' '.ucfirst($value->lastname);
            $champRecord['school']         = $value->currentUniversity;
            $champRecord['project_id']     = $value->project_id;
            $champRecord['applier_id']     = $value->id;
            $champRecord['event_id']       = $value->event_id;
            $champRecord['champ_id']       = $value->champ_id;
            $championRecord[]              = $champRecord;
        }
    
        return view('frontend.chart')->with(compact('appliersRecord'))->with(compact('secRoundRecord'))->with(compact('swt16RoundRecord'))->with(compact('elt8RoundRecord'))->with(compact('championRecord'));
    }

    public function getChartData()
    {
        
        $appliersData = ProjectAppliers::join('project_leaders','project_leaders.project_id','=','projectappliers.project_id')->join('tombstones','tombstones.id','=','project_leaders.project_id')->select('tombstones.name','projectappliers.*')->get();

        $appliersRecord = [];
        foreach ($appliersData as $key => $value) {
            $record = [];
            $record['project']    = ucfirst($value->name);
            $record['leader']     = ucfirst($value->firstname).' '.ucfirst($value->lastname);
            $record['school']     = $value->currentUniversity;
            $record['project_id'] = $value->project_id;
            $record['applier_id'] = $value->id;
            $appliersRecord[]     = $record;
        }
        return json_encode($appliersRecord,true);
    }

    public function getprojectData(Request $request)
    {
        $project_id = $request->input('project_id');
        $applier_id = $request->input('applier_id');

        $projectLeaderData = Tombstone::join('project_leaders','project_leaders.project_id','=','tombstones.id')
            ->join('projectappliers','projectappliers.id','=','project_leaders.applier_id')
            ->select('tombstones.name',
                'tombstones.description',
                'tombstones.image_link',
                'projectappliers.id',
                'projectappliers.project_id',
                'projectappliers.firstname',
                'projectappliers.lastname',
                'projectappliers.currentUniversity')
            ->where('tombstones.id','=',$project_id)->get();


        $projectLeaderData[0]['firstname'] = ucfirst($projectLeaderData[0]['firstname']).' '.ucfirst($projectLeaderData[0]['lastname']);
        $projectLeaderData[0]['currentUniversity'] = ucwords($projectLeaderData[0]['currentUniversity']);
        $projectLeaderData[0]['image_link'] = url('/tombstone/'.$projectLeaderData[0]['image_link']);
        

        if(!$projectLeaderData->isEmpty()){
            $projectMemberData = Tombstone::join('project_members','project_members.project_id','=','tombstones.id')
                ->join('projectappliers','projectappliers.id','=','project_members.applier_id')
                ->select('tombstones.name',
                    'projectappliers.id',
                    'projectappliers.project_id',
                    'projectappliers.firstname',
                    'projectappliers.lastname',
                    'projectappliers.currentUniversity')
                ->where('tombstones.id','=',$project_id)
                ->get();

            $memberAppliers = [];
            foreach ($projectMemberData as $key => $value) {
                $record = [];
                $record['member']     = ucfirst($value->firstname).' '.ucfirst($value->lastname);
                $record['school']     = $value->currentUniversity;
                $record['project_id'] = $value->project_id;
                $record['applier_id'] = $value->id;
                $memberAppliers[]     = $record;
            }

            $returnData = array(
                'leader' => $projectLeaderData,
                'member' => $memberAppliers,
                'status' => 1
            );
        }else{
            $returnData = array(
                'status' => 0
            );
        }

        return json_encode($returnData,true);
    }



    public function samplechaindex()
    {
        return view('frontend.newdetail');
    }

    public function opportindex()
    {
    	return view('frontend.opport');
    }

    public function srcopportindex()
    {
        return view('frontend.srcopport');
    }

    public function sampledetail()
    {
        return view('frontend.sampledetail');
    }



    //OnWorking Funtions..

    public function privacyPolicy()
    {
        return view('frontend.privacypolicy');
    }

    public function termsofService()
    {
        return view('frontend.termsofservice');
    }

    public function managTeam()
    {
        return view('frontend.manageteam');
    }

    public function teamDescription()
    {
        return view('frontend.teamdescription');
    }

    public function advisoryBoard()
    {
        return view('frontend.advisoryboard');
    }

    public function advisoryDescription()
    {
         return view('frontend.advisorydescription');
    }
}
