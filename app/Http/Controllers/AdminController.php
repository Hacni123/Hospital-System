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
use App\Models\Ambulance;
use App\Models\Ambulancerequest;
use App\Models\Icubed;
use App\Models\Icubrequest;
use App\Models\Pcrtest;
use Session;


class AdminController extends Controller
{
    public function index()
    {
        if(session()->has('LoggedUser')){
            $user = Login::where('id','=', session('LoggedUser'))->first();
            $row = DB::table('adminall')
                ->where('login_id','=',$user->id)
                ->first();

            $data = Hospital::get()->count();

            $data1 = Ambulance::get()->count();
               
            $data2 = Icubed::get()->count();

            $data3 = Ambulancerequest::get()->count();

            $data4 = Icubrequest::get()->count();

            $data5 = Patient::get()->count();

            $data6 = Pcrtest::get()->count();

            $data7 = Admin::get()->count();


                return view('Admin.adminindex', compact('data','data1','data2','data3','data4','data5','data6','data7'));
                 }  
        else
         {
              return view('Admin.login');
         }
    }

    public function show()
    {  
        if(session()->has('LoggedUser')){
        $user = Login::where('id','=', session('LoggedUser'))->first();
        $row = DB::table('adminall')
            ->where('login_id','=',$user->id)
            ->first();

        $showpatients = DB::table('patients')->get();
        return view('Admin.apatientlist',compact('showpatients'));
    }

    else
     {
          return view('Admin.login');
     }
    }
    
    public function allicubeds()
    {
        $showbeds=Hospital::all();
        return view('Admin.aicubeds',compact('showbeds'));
    }

    public function allhospitals()
    {
        $hospitals = DB::table('hospitals')->get();
        return view('Admin.ahospitals',compact('hospitals'));
    }
    
    public function avaambulance()
    {
        $hospitals=Hospital::all();
        return view('Admin.aambulance',compact('hospitals'));
        
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
        $hospitals=Hospital::all();
        return view('Admin.atest',compact('hospitals'));
    }

    public function testresults()
    {
        return view('Admin.aresults');
    }

    public function addhospital()
    {
       return view('Admin.hosreg');
    }

    public function hosregmail()
    {
        return view('Admin.hosregmail');
    }
    
    
    public function registration()
    {
        return view('Admin.adminregister');
    }

    public function adminlogin()
    {
        return view('Admin.login');
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
            
            return view("Admin.login")->withSuccess('Great! You have Successfully loggedin');
          } 
          catch(\Illuminate\Database\QueryException $ex)
          { 
            return back()->with('fail','User name is taken before.');
          }

    }
    
    public function postLogin(Request $request)
    {
        $request->validate([
            'login_username' => 'required',
            'login_password' => 'required|min:5|max:8',
        ]);
        $user = Login::where('login_username','=',$request->login_username)->first();

    
       if($user){
           if(Hash::check($request->login_password,$user->login_password)){
               $request->session()->put('LoggedUser',$user->id);

               return Redirect::route('admindashboard.index');


           }else{
               return back()->with('fail','Invalid password');
           }

       }else{
           return back()->with('fail','No account found for this username');
       }
    }

    public function logout() {
        Session::flush();
        Auth::logout();
  
        return redirect()->route('adminlogin.get')->with('success','logout Successfully.');
    }

    public function check()
    {
        return view('Admin.check');
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
               
            ]);

            $data = request(['hos_email','login_username','login_password']);
        
            Mail::to('hasaraismini@gmail.com')
            ->send(new \App\Mail\hosreg($data));
            return view("Admin.hosreg")->withSuccess('Great! You have Successfully loggedin');
            
          } 
          catch(\Illuminate\Database\QueryException $ex)
          { 
            return back()->with('fail','User name is taken before.');
          }
        
    }

    public function gethosambulances(Request $request)
    {
        
        $ambulances = DB::table('ambulances')
                ->where('hospital_id', $request->input('bid'))
                ->get();
        return view('Admin.adminshowambulance',compact('ambulances'));
    } 

    public function gethosicubeds(Request $request)
    {
        
        $icubeds = DB::table('icubeds')
                ->where('hospital_id', $request->input('bid'))
                ->get();
        return view('Admin.adminshowicubeds',compact('icubeds'));
    } 

    public function getpositivepcr(Request $request)
    {
        $pcr = Hospital::join('patients', 'patients.hospital_id', '=', 'hospitals.id')
                ->where('hospitals.id','=', $request->input('bid'))
                ->where('result', 'Positive')
                  ->join('pcrtests', 'pcrtests.patient_id', '=', 'patients.id')
                  ->get(['pcrtests.id', 'patients.pat_name', 'pcrtests.result','patients.pat_address','patients.pat_mobile','patients.pat_id','pcrtests.date']);
        return view('Admin.adminshowpcr',compact('pcr'));
    } 

    //Change password
    function adminchangePassword(){
        if(session()->has('LoggedUser')){
            $user = Login::where('id','=', session('LoggedUser'))->first();
            $row = DB::table('adminall')
                ->where('login_id','=',$user->id)
                ->first();
        $user2 = [
            'Info1'=>$row
        ];
        return view('Admin.resetpw',$user2);

        }    
           
    }

    public function adminupdatePassword(Request $request)
{
    if(session()->has('LoggedUser')){
        $user = Login::where('id','=', session('LoggedUser'))->first();
        $request->validate([
            'login_password' => 'required',
            'password' => 'required|string|min:6|confirmed',
            'password_confirmation' => 'required',
          ]);
  
          
  
          if (!Hash::check($request->login_password, $user->login_password)) {
              return back()->with('error', 'Current password does not match!');
          }
  
          $user->login_password = Hash::make($request->password);
          $user->save();
  
          return back()->with('success', 'Password successfully changed!');
    
    }

}

public function getpatients(Request $request)
    {
        
        $patients = DB::table('patients')->get();
        return view('Admin.showpatients',compact('patients'));
    }

    public function alladmins(Request $request)
    {
        
        $admins = DB::table('adminall')->get();
        return view('Admin.alladmins',compact('admins'));
    }

    function profile(){
        if(session()->has('LoggedUser')){
            $user = Login::where('id','=', session('LoggedUser'))->first();
            $data = [
                'LoggedUserInfo'=>$user
            ];

        }

            return view('Admin.profile',$data);
    }
}
