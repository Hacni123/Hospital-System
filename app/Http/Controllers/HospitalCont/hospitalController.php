<?php

namespace App\Http\Controllers\HospitalCont;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class hospitalController extends Controller
{
    public function index()
    {
        return view('Hospitals.dashboard');
    }
}
