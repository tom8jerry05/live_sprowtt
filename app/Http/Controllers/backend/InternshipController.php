<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\Datatables\Datatables;
use App\Internship;
use App\Country;
use App\State;
use App\City;


class InternshipController extends Controller
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
        return view('backend.internship.index');
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function view($id)
    {
        $internship = Internship::find($id);
        $internship->firstname = ucfirst($internship->firstname);
        $internship->lastname = ucfirst($internship->lastname);
        $internship->country = $this->getCountry($internship->country);
        $internship->state = $this->getState($internship->state);
        $internship->city = $this->getCity($internship->city);

        $url = "https://docs.google.com/gview?url=".asset('resume/'.$internship->resume .'')."&embedded=true";

        return view('backend.internship.view')->with(compact('internship'))->with(compact('url'));
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
        $query = Internship::select('*')->get();

        return Datatables::of($query)
        ->addIndexColumn()
        ->addColumn('action', function($model) {  
            return '<a  href="'. route('internship.view', $model->id) .'" class="btn btn-info btn-xs" type="button" aria-pressed="false">View</a>';   
        })
        ->make(true);           
    }
}
