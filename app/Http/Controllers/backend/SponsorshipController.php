<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\Datatables\Datatables;

use App\Sponsorship;
use App\Tombstone;

class SponsorshipController extends Controller
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
        return view('backend.sponsor.index');
        
    }

    public function grid()
    {
    	$query = Sponsorship::select('*')->get();
        return Datatables::of($query)
        ->addIndexColumn()
        ->editColumn('comp_name',function($model) {
            return  ucfirst($model->compname);
        })

        ->editColumn('contact_person',function($model) {
            return  ucfirst($model->contactperson);
        })

        ->editColumn('contact_number',function($model) {
            return  $model->contactnumber;
        })

        ->editColumn('contact_email',function($model) {
            return  $model->contactemail;
        })

        ->editColumn('project',function($model) {
            return  $this->getProject($model->project_id);
        })
        ->make(true);  
    }



    protected function getProject($value)
    {
        $project  = Tombstone::find($value);
        return $project->name;
    }


}
