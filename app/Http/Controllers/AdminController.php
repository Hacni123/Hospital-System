<?php

namespace App\Http\Controllers;

use DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Patient;
use App\Models\Admin;

class AdminController extends Controller
{
    public function index()
    {
        return view('Admin.adminindex');
    }

    public function show()
    { 
        
       // $showpatients = Admin::all();
       // return view('Admin.apatientlist',compact('showpatients'));

       //$showpatients = DB::select('select * from patients');
       $showpatients = DB::table('patients')->get();
       return view('Admin.apatientlist',compact('showpatients'));
       //return view('Admin.apatientlist',['showpatients'=>$showpatients]);
    }
    
    public function allicubeds()
    {
        $showbeds = DB::table('icubeds')->get();
        return view('Admin.aicubeds',compact('showbeds'));
    }

    public function allhospitals()
    {
        $hospitals = DB::table('hospitals')->get();
        return view('Admin.ahospitals',compact('hospitals'));
    }
    
    public function avaambulance()
    {
        $ambulances = DB::table('ambulances')->get();
        return view('Admin.aambulance',compact('ambulances'));
    }

    public function bookbeds()
    {
        $bookbeds = DB::table('icubrequests')->get();
        return view('Admin.reqbed',compact('bookbeds'));
    }

    public function bookambulance()
    {
        $bookamb = DB::table('ambulancerequests')->get();
        return view('Admin.reqamb',compact('bookamb'));
    }
    
    public function test()
    {
        $test = DB::table('pcrresults')->get();
        return view('Admin.atest',compact('test'));
    }

    public function testresults()
    {
        //$testres = DB::table('pcrtests')->get();
        //return view('Admin.ares',compact('testres'));
        return view('Admin.aresults');
    }

    
    public function check()
    {  
    }
}
