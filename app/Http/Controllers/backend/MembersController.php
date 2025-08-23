<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Yajra\Datatables\Datatables;
use App\ProjectAppliers;
use App\Country;
use App\State;
use App\City;
use App\Tombstone;


class MembersController extends Controller
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
        return view('backend.members.index');
        
    }

    public function view($id)
    {
        $applier = ProjectAppliers::find($id);
        $applier->firstname = ucfirst($applier->firstname);
        $applier->lastname = ucfirst($applier->lastname);
        $applier->citizenship = ucfirst($applier->citizenship);
        $applier->attendmedischool = ucfirst($applier->attendmedischool);
        $applier->country = $this->getCountry($applier->country);
        $applier->state = $this->getState($applier->state);
        $applier->city = $this->getCity($applier->city);
        $applier->project_id = $this->getProject($applier->project_id);

        $url = "https://docs.google.com/gview?url=".asset('projectApply/'.$applier->resume .'')."&embedded=true";

        return view('backend.members.view')->with(compact('applier'))->with(compact('url'));
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

    protected function getProject($value){
        $project  = Tombstone::find($value);
        return $project->name;
    }


    public function grid()
    {
        $query = ProjectAppliers::select('*')->get();
        return Datatables::of($query)
            ->addIndexColumn()
            ->editColumn('name',function($model) {
                return  ucfirst($model->firstname).' '.ucfirst($model->lastname);
            })
            ->editColumn('appliedFor',function($model){

            	$data = '';
            	if($model->interestedtl== 'yes'){
            		$data = 'Team Leader';
            	}elseif($model->interestedtl== 'no'){
            		$data = 'Team Member';
            	}
            	return $data;
            })

            ->editColumn('applied_at',function($model){
            	return $model->created_at;
            })
            ->addColumn('action', function($model) {  
                return '<a href="'. route('members.view', $model->id) .'" class="btn btn-primary btn-xs" type="button" aria-pressed="false">View</a>';  
            })
            
            
            ->make(true);   
    }
}
