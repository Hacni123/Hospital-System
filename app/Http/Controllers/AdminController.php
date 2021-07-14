<?php

namespace App\Http\Controllers;

use DB;
//use Mail;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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

    public function hospitalregisterview()
    {
        return view('Admin.hosreg');
    }

    public function hospitalregister()
    {
        //return view('Admin.hosreg');
        $data = request(['hosemail','hosuname','password']);
        //return $data;
        //\Illuminame\Support\Facades\
        Mail::to('hasaraismini@gmail.com')
            ->send(new \App\Mail\hosreg($data));

        return redirect('hosreg')->with('flash'.'Massege sent successfully...');
    }

    public function hosregmail()
    {
        return view('Admin.hosregmail');
    }
    

    public function check()
    {  
    }
}
