<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\Datatables\Datatables;
use App\Student;
use App\Country;
use App\State;
use App\City;

class StudentsController extends Controller
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
        return view('backend.students.index');
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function view($id)
    {
        $studentdetails = Student::find($id);
        $studentdetails->country = $this->getCountry($studentdetails->country);
        $studentdetails->state = $this->getState($studentdetails->state);
        $studentdetails->city = $this->getCity($studentdetails->city);
        return view('backend.students.view')->with(compact('studentdetails'));
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

    //role updating
    public function roleUpdate(Request $request)
    { 
        $student = Student::find($request->input('id'));
        $student->role = $request->input('role');
        if($student->save()){
            $data = array(
                'value' => $this->getRole($student->role),
                'status' => 1
            );
        }else {
            $data = array(
                'status' => 0
            );
        }
        return json_encode($data);  
    }


    protected function getRole($value)
    {
        if($value =='0'){
            $return = 'Member';
        }elseif($value =='1'){
            $return = 'Team Leader';
        }elseif($value =='2'){
            $return = 'Lead Researcher';
        }elseif($value =='3'){
            $return = 'Mentor';
        }elseif($value =='4'){
            $return = 'Vice President';
        }elseif($value =='5'){
            $return = 'President';
        }elseif($value =='6'){
            $return = 'Chairman';
        }
        return $return;
    }

    public function grid()
    {        
        $query = Student::select('*')->get();
        return Datatables::of($query)
        ->addColumn('action', function($model) {  
                return '<a  href="'. route('students.view', $model->id) .'" class="btn btn-info btn-xs" type="button" aria-pressed="false">View</a>';   
            })
        ->make(true);           
    }
}
