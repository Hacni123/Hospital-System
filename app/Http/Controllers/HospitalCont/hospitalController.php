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

    public function createnewpatient()
    {
        return view('Hospitals.patients.addnewpatient');
    }

    public function allpatientdetails()
    {
        return view('Hospitals.patients.allpatientdetails');
    }

    public function onepatientdetails()
    {
        return view('Hospitals.patients.onepatientdetails');
    }

    public function femalebeds()
    {
        return view('Hospitals.patients.femalebeds');
    }
}
