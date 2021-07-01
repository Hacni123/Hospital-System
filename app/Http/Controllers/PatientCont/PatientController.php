<?php

namespace App\Http\Controllers\PatientCont;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function index()
    {
        return view('Patients.home');
    }
}
