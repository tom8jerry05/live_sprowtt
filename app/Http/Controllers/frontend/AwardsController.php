<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AwardsController extends Controller
{
    public function index()
    {
    	return view('frontend.awards');
    }
}
