<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\Datatables\Datatables;
use App\EventApplier;
use App\Country;
use App\State;
use App\City;
use App\Tombstone;

class EventapplierController extends Controller
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
        return view('backend.eventapplier.index');
        
    }



    public function view($id)
    {
        $applier              = EventApplier::find($id);
        $applier->firstname   = ucfirst($applier->firstname);
        $applier->lastname    = ucfirst($applier->lastname);
        $applier->country     = $this->getCountry($applier->country);
        $applier->state       = $this->getState($applier->state);
        $applier->city        = $this->getCity($applier->city);
        $applier->project_id  = $this->getProject($applier->project_id);


        return view('backend.eventapplier.view')->with(compact('applier'));
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
        $query = EventApplier::select('*')->get();

        return Datatables::of($query)
        ->addIndexColumn()
        ->editColumn('name',function($model) {
            return  ucfirst($model->firstname).' '.ucfirst($model->lastname);
       	})
        ->addColumn('action', function($model) {  
            return '<a href="'. route('eventapplier.view', $model->id) .'" class="btn btn-primary btn-xs" type="button" aria-pressed="false">View</a>';  
        })
        ->make(true);   
    }
}
