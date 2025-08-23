<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\Datatables\Datatables;
use App\ContactUs;

class ContactusController extends Controller
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
        return view('backend.contactus.index');
        
    }

    public function grid()
    {        
        $query = ContactUs::select('*')->get();

        return Datatables::of($query)
        ->addIndexColumn()

        ->editColumn('name',function($model) {
                return  ucfirst($model->name);
           	})
        ->make(true);   
    }
}
