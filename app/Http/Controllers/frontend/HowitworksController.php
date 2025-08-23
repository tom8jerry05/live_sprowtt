<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HowitworksController extends Controller
{
    public function index()
    {
    	return view('frontend.howitworks');
    }
}
