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
use Response;
use Hash;
use Auth;
use App\Models\Patient;
use App\Models\Admin;
use App\Models\Hospital;
use App\Models\Login;
use Session;


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
        
        try { 
            $user = Login::firstOrCreate([
                'login_username'=>$request->input('login_username'),
                'login_password'=>Hash::make($request->input('login_password')),
              ]);

              Hospital::create([
                'login_id' => $user->id,
                'hos_name'=>$request->input('hos_name'),
                'hos_email'=>$request->input('hos_email'),
                'hos_address'=>$request->input('hos_address'),
                'hos_mobile'=>$request->input('hos_mobile')
               
                /*,'password'*/
            ]);
            
            return view("Admin.adminindex")->withSuccess('Great! You have Successfully loggedin');
          } 
          catch(\Illuminate\Database\QueryException $ex)
          { 
            return back()->with('fail','User name is taken before.');
          }
        
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
    

   



/* ----- */






    public function aindex()
    {
        return view('Admin.login');
    }  
      
    
    public function registration()
    {
        return view('Admin.register');
    }
      
    
    public function postLogin(Request $request)
    {
        $request->validate([
            'login_username' => 'required',
            'login_password' => 'required',
        ]);
   
        $credentials = $request->only('login_username', 'login_password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('Admin.adminindex')
                        ->withSuccess('You have Successfully loggedin');
        }
  
        return redirect("Admin.login")->withSuccess('Oppes! You have entered invalid credentials');
    }
      
    
    public function postRegistration(Request $request)
    {  
        $request->validate([
            
            'admin_name' => 'required',
            'admin_mobile'=> 'required',
            'admin_email' => 'required',
            'admin_address' => 'required',
            'login_username' => 'required',
            'login_password' => 'required'
        ]);
           

        try { 
            $user = Login::firstOrCreate([
                'login_username'=>$request->input('login_username'),
                'login_password'=>Hash::make($request->input('login_password')),
              ]);

              Admin::create([
                'login_id' => $user->id,
                'admin_name'=>$request->input('admin_name'),
                'admin_mobile'=>$request->input('admin_mobile'),
                'admin_email'=>$request->input('admin_email'),
                'admin_address'=>$request->input('admin_address')
               
                
            ]);
            
            return view("Admin.adminindex")->withSuccess('Great! You have Successfully loggedin');
          } 
          catch(\Illuminate\Database\QueryException $ex)
          { 
            return back()->with('fail','User name is taken before.');
          }


        /* 

        $data = $request->all();
        $check = $this->create($data);
         
        return redirect("dashboard")->withSuccess('Great! You have Successfully loggedin');

        */
    }
    
   

    public function dashboard()
    {
        if(Auth::check()){
            return view('Admin.adminindex');
        }
  
        return redirect("Admin.login")->withSuccess('Opps! You do not have access');
    }
    
   
    /*

    public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
      ]);
    }

    */
    
   
    public function logout() {
        Session::flush();
        Auth::logout();
  
        return Redirect('Admin.login');
    }

    public function new()
    {

    
$data = Hospital::join('patients', 'patients.hospital_id', '=', 'hospitals.id')
    ->where('hospitals.id','=', $row->id)
    ->join('icubrequests', 'icubrequests.patient_id', '=', 'patients.id')
    ->select(Hospital::raw('count(*) as count'))
    ->count();

$data1 = Hospital::join('patients', 'patients.hospital_id', '=', 'hospitals.id')
    ->where('hospitals.id','=', $row->id)
      ->join('pcrtests', 'pcrtests.patient_id', '=', 'patients.id')
      ->select(Hospital::raw('count(*) as count'))
    ->count();
   
$data2 = Hospital::join('patients', 'patients.hospital_id', '=', 'hospitals.id')
    ->where('hospitals.id','=', $row->id)
    ->join('ambulancerequests', 'ambulancerequests.patient_id', '=', 'patients.id')
    ->select(Hospital::raw('count(*) as count'))
    ->count();

$data3 = Hospital::join('patients', 'patients.hospital_id', '=', 'hospitals.id')
    ->where('hospitals.id','=', $row->id)
    ->select(Hospital::raw('count(*) as count'))
    ->count();

$data4 = Hospital::join('patients', 'patients.hospital_id', '=', 'hospitals.id')
    ->where('hospitals.id','=', $row->id)
    ->where('result', 'Positive')
    ->join('pcrtests', 'pcrtests.patient_id', '=', 'patients.id')
    ->select(Hospital::raw('count(*) as count'))
    ->count();

$data5 = Hospital::join('patients', 'patients.hospital_id', '=', 'hospitals.id')
    ->where('hospitals.id','=', $row->id)
    ->where('result', 'Negative')
    ->join('pcrtests', 'pcrtests.patient_id', '=', 'patients.id')
    ->select(Hospital::raw('count(*) as count'))
    ->count();

$data6 = Hospital::join('icubeds', 'icubeds.hospital_id', '=', 'hospitals.id')
    ->where('hospitals.id','=',$row->id)
    ->where('status', 'Availabe')
    ->select(Hospital::raw('count(*) as count'))
    ->count();

$data7 = Hospital::join('ambulances', 'ambulances.hospital_id', '=', 'hospitals.id')
    ->where('hospitals.id','=',$row->id)
    ->where('status', 'Availabe')
    ->select(Hospital::raw('count(*) as count'))
    ->count();

$icubeds = Hospital::join('icubeds', 'icubeds.hospital_id', '=', 'hospitals.id')
    ->where('hospitals.id','=',$row->id)
    ->get();

$ambulances = Hospital::join('ambulances', 'ambulances.hospital_id', '=', 'hospitals.id')
    ->where('hospitals.id','=',$row->id)
    ->get();
return view('Hospitals.index',compact('data','data1','data2','data3','data4','data5','data6','data7','icubeds','ambulances'));
    } 


    public function check()
    {
        return view('Admin.check');
    } 
}
