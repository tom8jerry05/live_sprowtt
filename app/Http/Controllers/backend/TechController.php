<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\Datatables\Datatables;
use App\Newtech;
use App\Country;

class TechController extends Controller
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
        return view('backend.tech.index');
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function view($id)
    {
        $techdetails = Newtech::find($id);
        $techdetails->development_status = $this->getdevelopmentStatus($techdetails->development_status);
        $techdetails->business_objectives = $this->getbusinessObjectives($techdetails->business_objectives);
        $techdetails->resident_europe = $this->getCountry($techdetails->resident_europe);

        if($techdetails->attachment1 != null){
            $url1 = "https://docs.google.com/gview?url=".asset('NewTech Attachments/'.$techdetails->attachment1 .'')."&embedded=true";
        }else{
            $url1 = '';
        }

        if($techdetails->attachment1 != null){
            $url2 = "https://docs.google.com/gview?url=".asset('NewTech Attachments/'.$techdetails->attachment2 .'')."&embedded=true";
        }else{
            $url2 = '';
        }
        
        return view('backend.tech.view')->with(compact('techdetails'))->with(compact('url1'))->with(compact('url2'));
    }


    protected function getdevelopmentStatus($value)
    {
        $data_arr = explode (",", $value);
        $retunable = [];
        foreach ($data_arr as $key => $value) {
            if($value == 1){
                $retunable[] = 'Concept';
            }elseif ($value == 2) {
                $retunable[] = 'Research';
            }elseif ($value == 3) {
                $retunable[] = 'Engineering Drawings';
            }elseif ($value == 4) {
                $retunable[] = 'Working prototype';
            }elseif ($value == 5) {
                $retunable[] = 'Relevant testing completed';
            }elseif ($value == 6) {
                $retunable[] = 'Regulatory clearance has been received';
            }elseif ($value == 7) {
                $retunable[] = 'Commercialized Device';
            }
        }
        return $retunable;
    }

    protected function getbusinessObjectives($value)
    {
        $data_arr = explode (",", $value);
        $retunable = [];
        foreach ($data_arr as $key => $value) {
            if($value == 1){
                $retunable[] = 'Co-development';
            }elseif ($value == 2) {
                $retunable[] = 'Licensing';
            }elseif ($value == 3) {
                $retunable[] = 'Royalties';
            }elseif ($value == 4) {
                $retunable[] = 'Sale';
            }elseif ($value == 5) {
                $retunable[] = 'Other';
            }
        }
        return $retunable;
    }

    protected function getCountry($value)
    {
        $countries  = Country::find($value);
        return $countries->name;
    }

    public function grid()
    {        
        $query = Newtech::select('*')->get();

        return Datatables::of($query)
        ->addIndexColumn()
        ->addColumn('action', function($model) {  
            return '<a  href="'. route('tech.view', $model->id) .'" class="btn btn-info btn-xs" type="button" aria-pressed="false">View</a>';   
        })
        ->editColumn('resident_europe',function($model) {
                return  $this->getCountry($model->resident_europe);
        })
        ->make(true);           
    }
}
