<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\Auth;

use App\Tombstone;
use App\TombstoneQues;
use App\TombstoneVote;
use App\ProjectAppliers;
use App\ProjectLeader;
use App\ProjectMember;
use App\FirstRound;
use App\Event;
use App\Country;
use App\State;
use App\City;
use Validator;
use DateTime;
use Mail;
use Illuminate\Support\Facades\DB;

class TombstoneController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('backend.tombstone.index');
    } 

    public function create()
    {
        $position = $this->getDropDowmPositions();
        $placePosition = $this->getDropDowmPlacePositions();
        return view('backend.tombstone.create')->with(compact('position'))->with(compact('placePosition'));
    }

    private function getDropDowmPositions()
    {

        $positions = $this->getpositionArray();

        $recordPosition = array();
        foreach ($positions as $key => $value){

            $firstRound = FirstRound::join('tombstones','first_round.project_id','=','tombstones.id')
                ->select('tombstones.name as name')
                ->where('first_round.position','=',$value['value'])
                ->first();
            if(!empty($firstRound)){
                $value['label'] .= ' ( '.$firstRound['name'].' )';
            }elseif($value['label'] == 'Position 0'){
                $value['label'] .= ' ( Not Position )';
            }else{
                $value['label'] .= ' ( Not selected )';
            }

            $recordPosition[] = $value['label'];
        }
        return $recordPosition;
    }

    private function getpositionArray(){

        $positions = array
        (
            array("label"=>'Position 0','value'=>'0'),
            array("label"=>'Position A','value'=>'1'),
            array("label"=>'Position B','value'=>'2'),
            array("label"=>'Position C','value'=>'3'),
            array("label"=>'Position D','value'=>'4'),
            array("label"=>'Position E','value'=>'5'),
            array("label"=>'Position F','value'=>'6'),
            array("label"=>'Position G','value'=>'7'),
            array("label"=>'Position H','value'=>'8'),
            array("label"=>'Position I','value'=>'9'),
            array("label"=>'Position J','value'=>'10'),
            array("label"=>'Position K','value'=>'11'),
            array("label"=>'Position L','value'=>'12'),
            array("label"=>'Position M','value'=>'13'),
            array("label"=>'Position N','value'=>'14'),
            array("label"=>'Position O','value'=>'15'),
            array("label"=>'Position P','value'=>'16'),
        );

        return $positions;
    }


    private function getDropDowmPlacePositions()
    {
        $positions = $this->getplacepositionArray();

        $recordPosition = array();
        foreach ($positions as $key => $value){

            $firstRound = FirstRound::join('tombstones','first_round.project_id','=','tombstones.id')
                ->select('tombstones.name as name')
                ->where('first_round.position','=',$value['value'])
                ->first();

            $tombstone = Tombstone::where('place_position','=',$value['value'])->first();
            if(!empty($tombstone)){
                $value['label'] .= ' ( '.$tombstone['name'].' )';
            }elseif($value['label'] == 'Place 0'){
                $value['label'] .= ' ( Not Position )';
            }else{
                $value['label'] .= ' ( Not selected )';
            }

            $recordPosition[] = $value['label'];
        }
        return $recordPosition;
    }

    private function getplacepositionArray(){
        $positions = array();
        for ($i=0;$i<51;$i++){
            $record = [];
            $record['label'] = 'Place '.$i;
            $record['value'] =  $i;
            $positions[] = $record;
        }
        return $positions;
    }

    public function pagepositcheck(Request $request){

        $check = Tombstone::where('place_position','=',$request->input('place_position'))->get();

        if($check->isEmpty()){
            $data = array(
                'status' => 0,
            );
        }else{
            $data = array(
                'status' => 1,
                'data'   => 'Already '.$check[0]->name.' placed in this position on home page',
            );
        }

        return json_encode($data);
    }

    public function edit($id)
    {
        $tombstone = Tombstone::find($id);
        if($tombstone->video_option == 'upload'){
            $tombstone->video_link = url('/tombstone/'.$tombstone->video_link);
        }


        if($tombstone->pres_video_option == 'upload'){
            $tombstone->pres_video_link = url('/tombstone/'.$tombstone->pres_video_link);
        }
        $tombstone->image_link = url('/tombstone/'.$tombstone->image_link);

        /*$url = "https://docs.google.com/gview?url=".asset('resume/'.$judge->resume .'')."&embedded=true";*/

        $tombstone->pdf_link = "https://docs.google.com/gview?url=".asset('tombstone/'.$tombstone->pdf_link .'')."&embedded=true";

        //$tombstone->position = $this->getPosition($tombstone->position);
        $tombstone->positionLable = $this->getPosition($tombstone->position);

        $assignLeader = ProjectAppliers::select('*')
                ->join('project_leaders','project_leaders.applier_id','=','projectappliers.id')
                ->where('project_leaders.project_id','=',$id)->first();

        $assignMember = ProjectAppliers::select('*')
                ->join('project_members','project_members.applier_id','=','projectappliers.id')
                ->where('project_members.project_id','=',$id)->get();
        if($assignMember->isEmpty()){
            $assignMember =array();
        }

        $projapplier = ProjectAppliers::select('*')->whereIn('project_id', [$id, 0])->get();


        foreach ($projapplier as $key => $value) {
            $assignMemberCheck = ProjectMember::where('applier_id','=',$value->id)->get();
            if($assignMemberCheck->isEmpty()){
                $value->checked = 0;
            }else{
                $value->checked = 1;
            }
            
            $assignLeaderCheck = ProjectLeader::where('applier_id','=',$value->id)->get();
            if($assignLeaderCheck->isEmpty()){
                $value->leaderchecked = 0;
            }else{
                $value->leaderchecked = 1;
            }
        }

        if($projapplier->isEmpty()){
            $projapplier =array();
        }

        $positions= $this->getDropDowmPositions();
        $place_positions = $this->getDropDowmPlacePositions();

        return view('backend.tombstone.update')->with(compact('tombstone'))
            ->with(compact('projapplier'))->with(compact('assignLeader'))
            ->with(compact('assignMember'))->with(compact('positions'))
            ->with(compact('place_positions'));
    }

    public function store(Request $request)
    {
        $date = new DateTime();
        $prifix = $date->format('y_m_d_H_i_s_');

        $validator = Validator::make($request->all(),[
            'name'           => 'required',
            'team_name'      => 'required',
            'agency'         => 'required',
            //'video_option'  => 'required',
            //'video_link'     => 'require|mimes:mp4,3gp,mov,avi,wmv',
            //'pres_video_option'  => 'required',
            //'pres_video_link'  => 'require|mimes:mp4,3gp,mov,avi,wmv',
            'image_link'     => 'required|mimes:jpeg,png',
			'pdf_link'       => 'required|mimes:pdf',
            'position'       => 'required',
            'place_position' => 'required',
            'description'    => 'required',
            'summary'        => 'required',
            'inven_number'   => 'required|unique:tombstones,invention_number',
            'project_status_option' => 'required'

        ]);

        if($validator->fails()){
            $errors = $validator->messages();
            return redirect()->route('tombstone.create')->withInput()
                                ->with('errors',$errors);
        }else{
            if($request->hasFile('video_link')) {
                $videofile = $request->file('video_link');
                if($request->input('video_option') == "upload"){
                    $destinationPath = 'tombstone';
                    $videofile->move($destinationPath,$prifix.$videofile->getClientOriginalName());
                }
            }
            if($request->hasFile('pres_video_link')) {
                $presVideoFile = $request->file('pres_video_link');
                if($request->input('pres_video_option') == "upload"){
                    $destinationPath = 'tombstone';
                    $presVideoFile->move($destinationPath,$prifix.$presVideoFile->getClientOriginalName());
                }
            }
            $imagefile = $request->file('image_link');
			$pdffile   = $request->file('pdf_link');
            //Moving uploaded file to server
            $destinationPath = 'tombstone';
            $imagefile->move($destinationPath,$prifix.$imagefile->getClientOriginalName());
			$pdffile->move($destinationPath,$prifix.$pdffile->getClientOriginalName());

            $tombstone = new Tombstone();
            $tombstone->name             = $request->input('name');
            $tombstone->team_name        = $request->input('team_name');
            $tombstone->agency           = $request->input('agency');
            $tombstone->video_option     = $request->input('video_option');
            if($request->hasFile('video_link')) {
                if($request->input('video_option') == "upload"){
                    $tombstone->video_link   = $prifix.$videofile->getClientOriginalName();
                }
            }else{
                $tombstone->video_link   =  $request->input('video_link');
            }
            $tombstone->pres_video_option  = $request->input('pres_video_option');
            if($request->hasFile('pres_video_link')) {
                if($request->input('pres_video_option') == "upload"){
                    $tombstone->pres_video_link   = $prifix.$presVideoFile->getClientOriginalName();
                }
            }else{
                $tombstone->pres_video_link   =  $request->input('pres_video_link');
            }
            $tombstone->image_link        = $prifix.$imagefile->getClientOriginalName();
			$tombstone->pdf_link          = $prifix.$pdffile->getClientOriginalName();
            $tombstone->position          = $request->input('position');
            $tombstone->invention_number  = $request->input('inven_number');
            $tombstone->description       = $request->input('description');
            $tombstone->summary           = $request->input('summary');
            $tombstone->status            = $request->input('project_status_option');
            if($tombstone->save()){
                $preLogic = Tombstone::select('id','place_position')->get();
                if(!$preLogic->isEmpty()){
                    foreach ($preLogic as $key => $value){
                        $betweenUpdate = Tombstone::find($value->id);
                        $betweenUpdate->place_position = $betweenUpdate->place_position + 1;
                        $betweenUpdate->update();
                    }
                }
                $finalUpdate = Tombstone::find($tombstone->id);
                $finalUpdate->place_position = '1';
                if($finalUpdate->update()){
                    return redirect()->route('BETombstone')
                        ->with('success','Your Project has been created successfully!');
                }
            }
        }
    }

    public function close($id)
    {
        $tombstone = Tombstone::find($id);
        $tombstone->status = '1';
        if($tombstone->update()){
            return redirect()->route('BETombstone');
        }
    }

    public function delete($id)
    {
        /*Tombstone::destroy($id);*/
        return  redirect()->route('BETombstone');
    }

    public function videoUpdate(Request $request, $id)
    {
        $date = new DateTime();
        $prifix = $date->format('y_m_d_H_i_s_');
        
        $validator = Validator::make($request->all(),[
            'video_option'  => 'required',
            //'video_link'    => 'require|mimes:mp4,3gp,mov,avi,wmv',
        ]);
        if($validator->fails()){
            $errors = $validator->messages();
            return redirect()->route('tombstone.edit',$id)->with('errors',$errors);
        }else{
            $videofile = $request->file('video_link');
            if($request->input('video_option') == "upload"){
                $destinationPath = 'tombstone';
                $videofile->move($destinationPath,$prifix.$videofile->getClientOriginalName());
            }
            $tombstone = Tombstone::find($id);
            $tombstone->video_option     = $request->input('video_option');
            if($request->input('video_option') == "upload"){
                $tombstone->video_link       = $prifix.$videofile->getClientOriginalName();
            }else{
                $tombstone->video_link      =  $request->input('video_link');
            }
            if($tombstone->save()){
                if($tombstone->video_option == 'upload'){
                    $tombstone->video_link = url('/tombstone/'.$tombstone->video_link);
                }
                $data = array(
                    'value' => $tombstone->video_link,
                    'status' => 1
                );
            }else {
                $data = array(
                    'status' => 0
                );
            }
            return json_encode($data);
        }
    }

    public function imageUpdate(Request $request, $id)
    {
        $tombstone = Tombstone::find($id);
        if($request->hasFile('image_link')) {
            $date      = new DateTime();
            $prifix    = $date->format('y_m_d_H_i_s_');
            $imagefile = $request->file('image_link');
            $destinationPath = 'tombstone';
            $imagefile->move($destinationPath,$prifix.$imagefile->getClientOriginalName());
            $tombstone->image_link = $prifix.$imagefile->getClientOriginalName();
        }
        $tombstone->description = $request->input('description');
        
        if($tombstone->save()){
            $data = array(
                'image_link'  => url('/tombstone/'.$tombstone->image_link),
                'description' => $tombstone->description,
                'status' => 1
            );
        }else {
            $data = array(
                'status' => 0
            );
        }
        return json_encode($data);
    }

    public function summaryUpdate(Request $request, $id)
    {
       
        $validator = Validator::make($request->all(),[
            'name'          => 'required',
            'summary'       => 'required',
        ]);
        if($validator->fails()){
            $errors = $validator->messages();
            return redirect()->route('tombstone.edit',$id)->with('errors',$errors);
        }else{
            $tombstone = Tombstone::find($id);
            $tombstone->name    = $request->input('name');
            $tombstone->summary = $request->input('summary');
            if($request->hasFile('pdf_link')) {
                $date      = new DateTime();
                $prifix    = $date->format('y_m_d_H_i_s_');
                $pdffile = $request->file('pdf_link');
                $destinationPath = 'tombstone';
                $pdffile->move($destinationPath,$prifix.$pdffile->getClientOriginalName());
                $tombstone->pdf_link = $prifix.$pdffile->getClientOriginalName();
            }

            if($tombstone->save()){
                $data = array(
                    'name'  => $tombstone->name,
                    'value' => $tombstone->summary,
                    'link'  => "https://docs.google.com/gview?url=".asset('tombstone/'.$tombstone->pdf_link .'')."&embedded=true",
                    'status' => 1
                );
            }else {
                $data = array(
                    'status' => 0
                );
            }
            return json_encode($data);
        }
    }

    public function invenUpdate(Request $request, $id)
    {

        /*echo '<pre>';
        print_r($request->all());
        exit();*/


        $tombstone = Tombstone::find($id);

        if($request->input('position') != '0'){
            $otherCheck =  FirstRound::where('project_id', '=', $tombstone->id)
               ->where('position','=',$request->input('position'))->get();
            if($otherCheck->isEmpty())
            {
                $validator = Validator::make($request->all(),[
                'position'      => 'required|unique:first_round',
                ]);
                if($validator->fails()){
                    $data = array(
                        'status'           => 0,
                        'error'            => $validator->messages()->toArray(),
                    );
                    return json_encode($data);                  
                }
            }
        }

        //technology video
        if($request->hasFile('video_link')) {
            $date      = new DateTime();
            $prifix    = $date->format('y_m_d_H_i_s_');
            $videofile = $request->file('video_link');

            if($request->input('video_option') == "upload"){
                $destinationPath = 'tombstone';
                $videofile->move($destinationPath,$prifix.$videofile->getClientOriginalName());
                $tombstone->video_link = $prifix.$videofile->getClientOriginalName();
            }
        }
        if($request->input('video_option') == "link"){
            $tombstone->video_option  = $request->input('video_option');
            $tombstone->video_link =  $request->input('video_link');
        }

        //presentation video
        if($request->hasFile('pres_video_link')) {
            $date      = new DateTime();
            $prifix    = $date->format('y_m_d_H_i_s_');
            $presVideofile = $request->file('pres_video_link');

            if($request->input('pres_video_option') == "upload"){
                $destinationPath = 'tombstone';
                $presVideofile->move($destinationPath,$prifix.$presVideofile->getClientOriginalName());
                $tombstone->pres_video_link = $prifix.$presVideofile->getClientOriginalName();
            }
        }
        if($request->input('pres_video_option') == "link"){
            $tombstone->pres_video_option   = $request->input('pres_video_option');
            $tombstone->pres_video_link =  $request->input('pres_video_link');
        }
        $tombstone->team_name           = $request->input('team_name');
        $tombstone->invention_number    = $request->input('inven_number');  
        $tombstone->position            = $request->input('position');
        $tombstone->status              = $request->input('status');

        if($request->input('place_position') != 0){
            $placePostCheck = Tombstone::where('place_position','=',$request->input('place_position'))->first();
            if(empty($placePostCheck)){
                $tombstone->place_position      = $request->input('place_position');
            }elseif(!empty($placePostCheck)){
                $presentValue = $tombstone->place_position ;
                $selectValue = $request->input('place_position');
                if($presentValue > $selectValue){
                    $betweenQuery = Tombstone::select('id','place_position')
                        ->whereRaw('place_position > '.$selectValue)
                        ->whereRaw('place_position < '.$presentValue)
                        ->get();
                    foreach ($betweenQuery as $value){
                        $betweenUpdate = Tombstone::find($value->id);
                        $betweenUpdate->place_position = $betweenUpdate->place_position + 1;
                        $betweenUpdate->update();
                    }
                    $selectQuery = Tombstone::where('place_position','=',$selectValue)->first();
                    $selectQuery->place_position = $selectValue+1;
                    if($selectQuery->update()){
                        $tombstone->place_position = $request->input('place_position');
                    }
                }elseif ($presentValue < $selectValue){

                    $lastbetweenQuery = Tombstone::select('id','place_position')
                        ->whereRaw('place_position > '.$presentValue)
                        ->whereRaw('place_position <= '.$selectValue)
                        ->get();
                    foreach ($lastbetweenQuery as $value) {
                        if ($value->place_position != $presentValue) {
                            $betweenUpdate = Tombstone::find($value->id);
                            $betweenUpdate->place_position = $betweenUpdate->place_position - 1;
                            $betweenUpdate->update();
                        }
                    }
                    $tombstone->place_position = $request->input('place_position');
                }
            }
        }

        //exit();

        $tombstone->agency = $request->input('agency');
        if($tombstone->save()){
            $alreadyFirstRoun = FirstRound::where('project_id', '=', $tombstone->id)->get();
            if(!$alreadyFirstRoun->isEmpty()){

                if($request->input('position') == '0'){
                     $firstRound = FirstRound::where('project_id', '=', $tombstone->id)->delete();
                 }else{
                    $firstRound = FirstRound::where('project_id', '=', $tombstone->id)->first();
                    $firstRound->position = $tombstone->position;
                    $firstRound->save();
                 }
            }
            if($request->input('position') != '0' && $request->input('applier_id') != "undefined" ){
                if($alreadyFirstRoun->isEmpty()){
                    $user = Auth::user();
                    $firstRound = new FirstRound();
                    $firstRound->project_id = $tombstone->id;
                    $firstRound->applier_id = $request->input('applier_id');
                    $firstRound->position   = $tombstone->position;
                    $firstRound->created_by = $user->id;
                    $firstRound->save();
                }
            }
            if($tombstone->video_option == 'upload'){
                $tombstone->video_link = url('/tombstone/'.$tombstone->video_link);
            }

            if($tombstone->pres_video_option == 'upload'){
                $tombstone->pres_video_link = url('/tombstone/'.$tombstone->pres_video_link);
            }
            $data = array(
                'invention_number' => $tombstone->invention_number,
                'team_name'        => $tombstone->team_name,
                'agency'           => $tombstone->agency,
                'position'         => $this->getPosition($tombstone->position),
                'video_link'       => $tombstone->video_link,
                'pres_video_link'  => $tombstone->pres_video_link,
                'status'           => 1
            );
        }else {
            $data = array(
                'status' => 0
            );
        }

        return json_encode($data);
    }

    public function tlAssign(Request $request)
    {
        $alreadyLeader = ProjectLeader::where('project_id','=',$request->input('projectid'))->get();
        if($alreadyLeader->isEmpty()){
            $projectLeader = new ProjectLeader();
        }else{
            $projectLeader = ProjectLeader::where('project_id','=',$request->input('projectid'))->first();
        }

        $projectLeader->project_id = $request->input('projectid');
        $projectLeader->applier_id = $request->input('applierid');

        if($projectLeader->save()){
            $event = Event::select('*')->first();
            $user = Auth::user();
            $tombstone = Tombstone::where('id','=',$projectLeader->project_id)->first();

            $already = FirstRound::where('project_id','=',$request->input('projectid'))->get();
            if($already->isEmpty()){
                $firstRound = new FirstRound();
                $firstRound->event_id    = $event->id;
                $firstRound->project_id  = $request->input('projectid');
                $firstRound->applier_id  = $request->input('applierid');
                $firstRound->position    = $tombstone->position;
                $firstRound->created_by  = $user->id;
                $firstRound->save();
            }

            $projapplier = ProjectAppliers::find($request->input('applierid'));

            $projapplier->project_id=$request->input('projectid');

            $projapplier->save();

            if($projapplier->attendmedischool == 'yes'){
                $graduateschool = 'Medical';
            }else{
                $graduateschool = 'N/A';
            }

            $data = array(
                'name' => ucfirst($projapplier->firstname).' '.ucfirst($projapplier->lastname),
                'university' => $projapplier->currentUniversity,
                'graduateschool' => $graduateschool,
                'status' => 1
            );
        }else {
            $data = array(
                'status' => 0
            );
        }
        return json_encode($data);
    }

    public function tmAssign(Request $request)
    {

        $memData =  $request->input('mem');

        $preUpdate = ProjectMember::where('project_id',$request->input('projId'))->get();

        foreach ($preUpdate as $key => $value) {
            $applierUpdate = ProjectAppliers::find($value['applier_id']);
            if($applierUpdate->applier_type == 'general'){
                $applierUpdate->project_id = 0;
            }
            $applierUpdate->save();
        }
        ProjectMember::where('project_id',$request->input('projId'))->delete();

        $returnData = [];
        foreach ($memData as $key => $value) {
            $precheck = ProjectMember::where([['project_id','=',$value['projectid']], ['applier_id','=',$value['applierid']] ])->get();
            if($precheck->isEmpty()){
                $projectMember = new ProjectMember();
                $projectMember->project_id = $value['projectid'];
                $projectMember->applier_id = $value['applierid'];
                if($projectMember->save()){
                    
                }
            }
            $projapplier = ProjectAppliers::find($value['applierid']);
            $projapplier->project_id = $request->input('projId');
            $projapplier->save();
            
            $applier = [];
            $applier['name'] = ucfirst($projapplier->firstname).' '.ucfirst($projapplier->lastname);
            $applier['university'] = $projapplier->currentUniversity;
            $returnData[] = $applier;
        }

        if(empty($returnData)){
            $data = array(
                'status' => 0
            );
        }else{
            $data = array(
                'status' => 1,
                'value'  =>$returnData
            );
        }
        return json_encode($data);
    }

    public function applierView($id)
    {
        $applier = ProjectAppliers::find($id);
        $applier->firstname = ucfirst($applier->firstname);
        $applier->lastname = ucfirst($applier->lastname);
        $applier->citizenship = ucfirst($applier->citizenship);
        $applier->attendmedischool = ucfirst($applier->attendmedischool);
        $applier->country = $this->getCountry($applier->country);
        $applier->state = $this->getState($applier->state);
        $applier->city = $this->getCity($applier->city);
        

        if(!empty($applier)){
            $data = array(
                'status' => 1,
                'details' => $applier
            );
        }else{
            $data = array(
                'status' => 0, 
            );
        }

        return json_encode($data);
    }

    public function applierDelete($id)
    {
        $leader=ProjectLeader::where('applier_id',$id)->delete();
        $member=ProjectMember::where('applier_id',$id)->delete();
        //$res=ProjectAppliers::where('id',$id)->delete();

        $projapplier = ProjectAppliers::find($id);
        if($projapplier->applier_type == 'general'){
            $projapplier->project_id = 0;
        }
        $projapplier->save();
        $data = array(
            'status' => 1,
        );

        return json_encode($data);
    }

    public function getResume($id)
    {
        $applier = ProjectAppliers::find($id);
        $applier->resume = url('/projectApply/'.$applier->resume);

        if(!empty($applier)){
            $data = array(
                'status' => 1,
                'details' => $applier
            );
        }else{
            $data = array(
                'status' => 0, 
            );
        }

         return json_encode($data);
    }

    protected function getPosition($value){
        $data = '';
        if($value == 0){
            $data = 'Position 0';
        }elseif($value == 1){
            $data = 'Position A';
        }elseif($value == 2){
            $data = 'Position B';
        }elseif($value == 3){
            $data = 'Position C';           
        }elseif($value == 4){
            $data = 'Position D';           
        }elseif($value == 5){
            $data = 'Position E';           
        }elseif($value == 6){
            $data = 'Position F';          
        }elseif($value == 7){
            $data = 'Position G';           
        }elseif($value == 8){
            $data = 'Position H';           
        }elseif($value == 9){
            $data = 'Position I';           
        }elseif($value == 10){
            $data = 'Position J';           
        }elseif($value == 11){
            $data = 'Position K';           
        }elseif($value == 12){
            $data = 'Position L';           
        }elseif($value == 13){
            $data = 'Position M';           
        }elseif($value == 14){
            $data = 'Position N';           
        }elseif($value == 15){
            $data = 'Position O';           
        }elseif($value == 16){
            $data = 'Position P';           
        }

        return $data;
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

    public function grid()
    {        
        $query = Tombstone::select('*')
            ->orderBy(DB::raw('-place_position'),'DESC')
            ->get();
        return Datatables::of($query)
            ->addIndexColumn()
            ->editColumn('place_position',function($model) {
                return $model->place_position;
            })
            ->editColumn('name',function($model) {
                return strtoupper($model->name);
            })
            ->editColumn('team_name',function($model) {
                return strtoupper($model->team_name);
            })

            ->editColumn('summary',function($model) {
                return  str_limit($model->summary, 40);
            })
            ->editColumn('created_at',function($model) {
                return  $this->time_elapsed_string($model->created_at);
            })
            ->editColumn('status',function($model) {
                if($model->status == '0'){
                    return '<span class="label label-success btn-xs">Active</span>';
                }elseif($model->status == '1'){
                    return '<span class="label label-danger btn-xs">Closed</span>';
                }
            })
            ->addColumn('action', function($model) {

                $buttons = '<a href="'. route('tombstone.edit', $model->id) .'" class="btn btn-primary btn-xs" type="button" aria-pressed="false"><i class="fa fa-pencil-square-o"></i> Edit</a>
                <a href="'. route('tombstone.delete', $model->id) .'" class="btn btn-danger btn-xs" type="button" aria-pressed="false"><i class="fa fa-archive"></i> Archive</a> ';

                return $buttons;
            })
            ->rawColumns(['status', 'action'])
            ->make(true);   
    }

    private function time_elapsed_string($datetime, $full = false) {
        $now = new DateTime;
        $ago = new DateTime($datetime);
        $diff = $now->diff($ago);

        $diff->w = floor($diff->d / 7);
        $diff->d -= $diff->w * 7;

        $string = array(
            'y' => 'year',
            'm' => 'month',
            'w' => 'week',
            'd' => 'day',
            'h' => 'hour',
            'i' => 'minute',
            's' => 'second',
        );
        foreach ($string as $k => &$v) {
            if ($diff->$k) {
                $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
            } else {
                unset($string[$k]);
            }
        }

        if (!$full) $string = array_slice($string, 0, 1);
        return $string ? implode(', ', $string) . ' ago' : 'just now';
    }

    public function quesIndex()
    {
        return view('backend.tombquestion.index'); 
    }

    public function quesGrid()
    {        
        $query = TombstoneQues::join('tombstones','tombstone_ques.tombstone_id','=','tombstones.id')
        ->select('tombstone_ques.*','tombstones.name as name')->get();

        return Datatables::of($query)
            ->addIndexColumn()
            
            ->editColumn('name',function($model) {
                return strtoupper($model->name);
            })
            ->editColumn('ques_email',function($model) {
                return $model->ques_email;
            })
            ->editColumn('question',function($model) {
                return str_limit($model->question, 40);
            })
            ->addColumn('response', function($model) {
                if($model->status == 0){
                    return '<span class="label label-danger btn-xs">Pending</span>';
                }else{
                    return '<span class="label label-primary btn-xs">Resolved</span>';
                }
            })
            ->addColumn('action', function($model) {
                if($model->status == 0){
                    return '<a  id="questionRes" data-id="'.$model->id.'" data-ques="'.$model->question.'" class="btn btn-primary btn-xs" type="button" aria-pressed="false">Response</a>';
                }else{
                    return '<a class="btn btn-primary btn-xs">Resolved</a>';
                } 
            })
            ->rawColumns(['response', 'action'])
            ->make(true);
    }

    public function quesResp(Request $request,$id)
    {
        $validator = Validator::make($request->all(),[
            'responce'   => 'required',
        ]);
        if($validator->fails()){
            $data = array(
                'status' => 0,
                'error'  => $validator->messages()->toArray(),
            );
            return json_encode($data);
        }else{
            $tombstoneQues = TombstoneQues::find($id);
            $tombstoneQues->responce = $request->input('responce');
            $tombstoneQues->status   = 1;
            if($tombstoneQues->save()){

                //mail notification
                $mail_details = array(
                    'toMail'=> $tombstoneQues->ques_email,
                );
                $data = array(
                    'mail'             => 'questionResp',
                    'question'         => $tombstoneQues->question,
                    'responce'         => $tombstoneQues->responce,
                );
                Mail::send(['html'=>'emails.mail'], $data, function($message) use($mail_details){
                    $message->to( $mail_details['toMail'] , 'Viewer');
                    $message->subject('Response received from sprowttlaunchpadd');
                    $message->from('Admin@sprowtt.com','Administrator');
                });

                $data = array('status'=> 1);
            }else{
                $data = array('status'=> 0);
            }
            return json_encode($data);
        }
    }


    public function voterIndex()
    {
        return view('backend.tombvoters.index'); 
    }

    public function voterGrid()
    {

        $query = TombstoneVote::join('tombstones','tombstone_vote.tomb_id','=','tombstones.id')
            ->join('users','tombstone_vote.user_id','=','users.id')
            ->select('users.name as voter_name',
                'users.email as voter_email',
                'tombstones.name as tomb_name',
                'tombstone_vote.created_at'
            )->get();

        return Datatables::of($query)
            ->addIndexColumn()
            
            ->editColumn('name',function($model) {
                return strtoupper($model->tomb_name);
            })
            ->editColumn('voter_name',function($model) {
                return $model->voter_name;
            })
            ->editColumn('voter_email',function($model) {
                return $model->voter_email;
            })
            ->editColumn('created_at',function($model) {
                return $model->created_at;
            })
            ->make(true);
    }
}
