<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\Datatables\Datatables;
use App\Ambassador;
use App\Country;
use App\State;
use App\City;

class AmbassadorController extends Controller
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
        return view('backend.ambassador.index');
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function view($id)
    {
        $ambassador = Ambassador::find($id);

        $ambassador->firstname = ucfirst($ambassador->firstname);
        $ambassador->lastname = ucfirst($ambassador->lastname);
        $ambassador->country = $this->getCountry($ambassador->country);
        $ambassador->state = $this->getState($ambassador->state);
        $ambassador->city = $this->getCity($ambassador->city);

        $url = "https://docs.google.com/gview?url=".asset('resume/'.$ambassador->resume .'')."&embedded=true";

        return view('backend.ambassador.view')->with(compact('ambassador'))->with(compact('url'));
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
        $query = Ambassador::select('*')->get();
        return Datatables::of($query)
        ->addIndexColumn()
        ->editColumn('name',function($model) {
                return  ucfirst($model->firstname).' '.ucfirst($model->lastname) ;
           	})
        ->addColumn('action', function($model) {  
                return '<a  href="'. route('ambassador.view', $model->id) .'" class="btn btn-info btn-xs" type="button" aria-pressed="false">View</a>';   
            })
        ->make(true);           
    }
}
