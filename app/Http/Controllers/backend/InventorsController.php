<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\Datatables\Datatables;
use App\Inventors;

class InventorsController extends Controller
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
        return view('backend.inventors.index');
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function view($id)
    {
        $inventorsdetails = Inventors::find($id);

        $inventorsdetails->entrepreneur = $this->getEntrepreneur($inventorsdetails->entrepreneur);
        $inventorsdetails->dates = $this->getDates($inventorsdetails->dates);
        $inventorsdetails->hear_about = $this->getHearAbout($inventorsdetails->hear_about);

        return view('backend.inventors.view')->with(compact('inventorsdetails'));
    }

    protected function getEntrepreneur($value)
    {
        $returnValue ="";
        if($value == 1){
            $returnValue = "Yes,bring it on!";
        }elseif($value == 2){
            $returnValue = "Not right now";
        }elseif($value == 3){
            $returnValue = "Other";
        }
        return $returnValue;
    }


    protected function getDates($datavalue)
    {
        $returnValue ="";
        if($datavalue == 1){
            $returnValue = "As of now,nothing is preventing them from attending, but we'll confirm once dates are finalized";
        }elseif($datavalue == 2){
            $returnValue = "They won't be able to attend";
        }elseif($datavalue == 3){
            $returnValue = "Other";
        }
        return $returnValue;
    }


    protected function getHearAbout($value)
    {
        $returnValue ="";
        if($value == 1){
            $returnValue = "Facebook";
        }elseif($value == 2){
            $returnValue = "Twitter";
        }elseif($value == 3){
            $returnValue = "LinkedIn";
        }elseif($value == 4){
            $returnValue = "Search Engines";
        }elseif($value == 5){
            $returnValue = "Friends/Colleagues";
        }elseif($value == 6){
            $returnValue = "Other";
        }
        return $returnValue;
    }



    public function grid()
    {        
        $query = Inventors::select('*')->get();

        return Datatables::of($query)
        ->addColumn('action', function($model) {  
            return '<a href="'. route('inventors.view', $model->id) .'" class="btn btn-info btn-xs" type="button" aria-pressed="false">View</a>';  
        })
        ->make(true);           
    }

}
