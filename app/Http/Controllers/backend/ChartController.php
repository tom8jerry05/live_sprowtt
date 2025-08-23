<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

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

class ChartController extends Controller
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
        $event = Event::select('*')->first();
        $user = Auth::user();

        //First Round Record
        /*$appliersData = ProjectLeader::join('projectappliers','projectappliers.project_id','=','project_leaders.project_id')
            ->join('tombstones','tombstones.id','=','project_leaders.project_id')
            ->select('tombstones.name','projectappliers.*')
            ->where('projectappliers.interestedtl','=','yes')
            ->get();
        $appliersRecord = [];
        foreach ($appliersData as $key => $value) {
            $already = FirstRound::where('project_id','=',$value->project_id)->get();
            $record = [];
            if($already->isEmpty()){
                $firstRoundRec = new FirstRound();
                $firstRoundRec->event_id     = $event->id;
                $firstRoundRec->project_id   = $value->project_id;
                $firstRoundRec->applier_id   = $value->id;
                //$firstRoundRec->position     = '';
                $firstRoundRec->created_by   = $user->id;
                $firstRoundRec->save();
                //$record['event_id'] = $firstRoundRec->event_id;
                $record['event_id'] = $event->id;
                $record['fRound_id'] = $firstRoundRec->id;
            }else{
                $record['event_id'] = $already['0']['event_id'];
                $record['fRound_id'] = $already['0']['id'];
            }
            $record['project']    = ucfirst($value->name);
            $record['leader']     = ucfirst($value->firstname).' '.ucfirst($value->lastname);
            $record['school']     = $value->currentUniversity;
            $record['project_id'] = $value->project_id;
            $record['applier_id'] = $value->id;
            $appliersRecord[]     = $record;
        }*/


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
            $secRecord['team_name']    = ucfirst($value->team_name);
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
            $swtRecord['team_name']    = ucfirst($value->team_name);
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
            $eltRecord['team_name']    = ucfirst($value->team_name);
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
            $champRecord['team_name']    = ucfirst($value->team_name);
            $champRecord['leader']         = ucfirst($value->firstname).' '.ucfirst($value->lastname);
            $champRecord['school']         = $value->currentUniversity;
            $champRecord['project_id']     = $value->project_id;
            $champRecord['applier_id']     = $value->id;
            $champRecord['event_id']       = $value->event_id;
            $champRecord['champ_id']       = $value->champ_id;
            $championRecord[]              = $champRecord;
        }
        return view('backend.chart.index')->with(compact('appliersRecord'))->with(compact('secRoundRecord'))->with(compact('swt16RoundRecord'))->with(compact('elt8RoundRecord'))->with(compact('championRecord'));
    }

    public function postSecRound(Request $request)
    {
        $already = SecondRound::where([
            ['position', '=', $request->input('position')],
        ])->get();
        $user = Auth::user();
        
        if($already->isEmpty()){
            $secRoundRec = new SecondRound();
        }elseif(!$already->isEmpty()){
            $secRoundRec = SecondRound::where([
                ['position', '=', $request->input('position')],
            ])->first();
        }
        $secRoundRec->event_id   = $request->input('event_id');
        $secRoundRec->project_id = $request->input('project_id');
        $secRoundRec->applier_id = $request->input('applier_id');
        $secRoundRec->fround_id  = $request->input('round_id');
        $secRoundRec->position   = $request->input('position');
        $secRoundRec->created_by = $user->id;
        if($secRoundRec->save()){
            $appliersData = ProjectLeader::join('projectappliers','projectappliers.project_id','=','project_leaders.project_id')
            ->join('tombstones','tombstones.id','=','project_leaders.project_id')
            ->join('second_round','second_round.project_id','=','tombstones.id')
            ->select('tombstones.name','projectappliers.*')
            ->where('projectappliers.interestedtl','=','yes')
            ->where('second_round.project_id','=',$secRoundRec->project_id)
            ->get();
            if(!$appliersData->isEmpty()){
                $data =[];
                $data['status']   = 1;
                $data['project']    = ucfirst($appliersData['0']['name']);
                $data['leader']     = ucfirst($appliersData['0']['firstname']).' '.ucfirst($appliersData['0']['lastname']);
                $data['school']     = $appliersData['0']['currentUniversity'];
                $data['project_id'] = $appliersData['0']['project_id'];
                $data['applier_id'] = $appliersData['0']['id'] ;
                $data['event_id']   = $secRoundRec->event_id;
                $data['Round_id']   = $secRoundRec->id;
                $data['position']   = $secRoundRec->position;
            }
        }else{
            $data =[];
            $data['status']   = 0;
        }

        return json_encode($data);
    }

    public function postSwt16Round(Request $request)
    {
        $already = Sweet16Round::where([
            ['position', '=', $request->input('position')],
        ])->get();
        $user = Auth::user();
        if($already->isEmpty()){
            $swt16RoundRec = new Sweet16Round();
        }elseif(!$already->isEmpty()){
            $swt16RoundRec = Sweet16Round::where([
                ['position', '=', $request->input('position')],
            ])->first();
        }
        $swt16RoundRec->event_id   = $request->input('event_id');
        $swt16RoundRec->project_id = $request->input('project_id');
        $swt16RoundRec->applier_id = $request->input('applier_id');
        $swt16RoundRec->sround_id  = $request->input('round_id');
        $swt16RoundRec->position   = $request->input('position');
        $swt16RoundRec->created_by = $user->id;
        if($swt16RoundRec->save()){
            $appliersData = ProjectLeader::join('projectappliers','projectappliers.project_id','=','project_leaders.project_id')
            ->join('tombstones','tombstones.id','=','project_leaders.project_id')
            ->join('sweet_16','sweet_16.project_id','=','tombstones.id')
            ->select('tombstones.name','projectappliers.*')
            ->where('projectappliers.interestedtl','=','yes')
            ->where('sweet_16.project_id','=',$swt16RoundRec->project_id)
            ->get();

            $data =[];
            $data['status']   = 1;
            $data['project']    = ucfirst($appliersData['0']['name']);
            $data['leader']     = ucfirst($appliersData['0']['firstname']).' '.ucfirst($appliersData['0']['lastname']);
            $data['school']     = $appliersData['0']['currentUniversity'];
            $data['project_id'] = $appliersData['0']['project_id'];
            $data['applier_id'] = $appliersData['0']['id'] ;
            $data['event_id']   = $swt16RoundRec->event_id;
            $data['Round_id']   = $swt16RoundRec->id;
            $data['position']   = $swt16RoundRec->position;
        }else{
            $data =[];
            $data['status']   = 0;
        }

        return json_encode($data);
    }

    public function postElite8Round(Request $request)
    {

        $already = Elite8Round::where([
            ['position', '=', $request->input('position')],
        ])->get();
        $user = Auth::user();
        if($already->isEmpty()){
            $elt8RoundRec = new Elite8Round();
        }elseif(!$already->isEmpty()){
            $elt8RoundRec = Elite8Round::where([
                ['position', '=', $request->input('position')],
            ])->first();
        }
        $elt8RoundRec->event_id   = $request->input('event_id');
        $elt8RoundRec->project_id = $request->input('project_id');
        $elt8RoundRec->applier_id = $request->input('applier_id');
        $elt8RoundRec->swtround_id  = $request->input('round_id');
        $elt8RoundRec->position   = $request->input('position');
        $elt8RoundRec->created_by = $user->id;
        if($elt8RoundRec->save()){
            $appliersData = ProjectLeader::join('projectappliers','projectappliers.project_id','=','project_leaders.project_id')
            ->join('tombstones','tombstones.id','=','project_leaders.project_id')
            ->join('elite_8','elite_8.project_id','=','tombstones.id')
            ->select('tombstones.name','projectappliers.*')
            ->where('projectappliers.interestedtl','=','yes')
            ->where('elite_8.project_id','=',$elt8RoundRec->project_id)
            ->get();

            $data =[];
            $data['status']   = 1;
            $data['project']    = ucfirst($appliersData['0']['name']);
            $data['leader']     = ucfirst($appliersData['0']['firstname']).' '.ucfirst($appliersData['0']['lastname']);
            $data['school']     = $appliersData['0']['currentUniversity'];
            $data['project_id'] = $appliersData['0']['project_id'];
            $data['applier_id'] = $appliersData['0']['id'] ;
            $data['event_id']   = $elt8RoundRec->event_id;
            $data['Round_id']   = $elt8RoundRec->id;
            $data['position']   = $elt8RoundRec->position;
        }else{
            $data =[];
            $data['status']   = 0;
        }
        return json_encode($data);
    }

    public function postChampionShip(Request $request){
        $already = Championship::where([
            ['position', '=', $request->input('position')],
        ])->get();
        $user = Auth::user();
        if($already->isEmpty()){
            $champRec = new Championship();
        }elseif(!$already->isEmpty()){
            $champRec = Championship::where([
                ['position', '=', $request->input('position')],
            ])->first();
        }
        $champRec->event_id       = $request->input('event_id');
        $champRec->project_id     = $request->input('project_id');
        $champRec->applier_id     = $request->input('applier_id');
        $champRec->eliteround_id  = $request->input('round_id');
        $champRec->position       = $request->input('position');
        $champRec->created_by     = $user->id;
        if($champRec->save()){

            $appliersData = ProjectLeader::join('projectappliers','projectappliers.project_id','=','project_leaders.project_id')
            ->join('tombstones','tombstones.id','=','project_leaders.project_id')
            ->join('championship','championship.project_id','=','tombstones.id')
            ->select('tombstones.name','projectappliers.*')
            ->where('projectappliers.interestedtl','=','yes')
            ->where('championship.project_id','=',$champRec->project_id)
            ->get();

            $data =[];
            $data['status']   = 1;
            $data['project']    = ucfirst($appliersData['0']['name']);
            $data['leader']     = ucfirst($appliersData['0']['firstname']).' '.ucfirst($appliersData['0']['lastname']);
            $data['school']     = $appliersData['0']['currentUniversity'];
            $data['project_id'] = $appliersData['0']['project_id'];
            $data['applier_id'] = $appliersData['0']['id'] ;
            $data['event_id']   = $champRec->event_id;
            $data['Round_id']   = $champRec->id;
            $data['position']   = $champRec->position;
        }else{
            $data =[];
            $data['status']   = 0;
        }
        return json_encode($data);
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

    public function removeprojectData(Request $request)
    {
        $project_id = $request->input('project_id');
        $applier_id = $request->input('applier_id');
        $event_id   = $request->input('event_id');
        $round_id   = $request->input('round_id');
        $position   = $request->input('position');

        if($position == 'first'){
            $destroy = FirstRound::where('project_id','=',$project_id)->delete();
            $data = array('status' => 1, );
        }elseif ($position == 'second') {
            $destroy = SecondRound::where('project_id','=',$project_id)->delete();
            $data = array('status' => 1, );
        }elseif ($position == 'sweet') {
            $destroy = Sweet16Round::where('project_id','=',$project_id)->delete();
            $data = array('status' => 1, );
        }elseif ($position == 'elite') {
            $destroy = Elite8Round::where('project_id','=',$project_id)->delete();
            $data = array('status' => 1, );
        }elseif ($position == 'champ') {
            $destroy = Championship::where('project_id','=',$project_id)->delete();
            $data = array('status' => 1, );
        }

        return json_encode($data);
    }
}
