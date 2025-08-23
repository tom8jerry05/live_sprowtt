<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\Datatables\Datatables;
use App\Judge;
use App\Country;
use App\State;
use App\City;
use App\Tombstone;

class JudgeController extends Controller
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
        return view('backend.judge.index');
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function view($id)
    {
        $judge = Judge::find($id);

        $judge->firstname = ucfirst($judge->firstname);
        $judge->lastname = ucfirst($judge->lastname);
        $judge->country = $this->getCountry($judge->country);
        $judge->state = $this->getState($judge->state);
        $judge->city = $this->getCity($judge->city);
        $judge->project_id = $this->getProject($judge->project_id);

        $url = "https://docs.google.com/gview?url=".asset('resume/'.$judge->resume .'')."&embedded=true";

        return view('backend.judge.view')->with(compact('judge'))->with(compact('url'));
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

    protected function getProject($value)
    {
        $project  = Tombstone::find($value);
        return $project->name;
    }

    public function grid()
    {        
        $query = Judge::select('*')->get();
        return Datatables::of($query)
        ->addIndexColumn()
        ->editColumn('name',function($model) {
                return  ucfirst($model->firstname).' '.ucfirst($model->lastname) ;
           	})
        ->addColumn('action', function($model) {  
                return '<a  href="'. route('judges.view', $model->id) .'" class="btn btn-info btn-xs" type="button" aria-pressed="false">View</a>';   
            })
        ->make(true);           
    }
}
