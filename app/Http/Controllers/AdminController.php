<?php

namespace App\Http\Controllers;

use DB;
//use Mail;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Input;
use Validator;
use Redirect;
use App\Models\Patient;
use App\Models\Admin;
use App\Models\Hospital;
use App\Models\Login;

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

    /* 

    public function hospitalregisterview()
    {
        return view('Admin.hosreg');
    }

    */

    public function addhospital()
    {
       return view('Admin.hosreg');
    }

    public function savehospital(Request $request)
    {
        
    
        $request->validate([
            
            'hos_name' => 'required',
            'hos_email' => 'required|email',
            'hos_address' => 'required',
            'hos_mobile' => 'required',
            'login_username' => 'required',
            'login_password' => 'required'
        ]);
        
        //$hos = new Hospital;
        $user = Login::create([
            'login_username'=>$request->input('login_username'),
            'login_password'=>$request->input('login_password'),
            
            //'login_password' => Hash::make('login_password')
          ]);
        
    
        Hospital::create([
            'login_id' => $user->id,
            'hos_name'=>$request->input('hos_name'),
            'hos_email'=>$request->input('hos_email'),
            'hos_address'=>$request->input('hos_address'),
            'hos_mobile'=>$request->input('hos_mobile')
           
            /*,'password'*/
        ]);
        
            //auth()->login($user);
        $user->save();
        //return redirect('hosreg');
    
    }

    

    public function hospitalregister()
    {
        

        //return view('Admin.hosreg');
        $data = request(['hos_email','login_username','login_password']);
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
