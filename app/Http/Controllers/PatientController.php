<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Input;
use Validator;
use Redirect;
use App\Models\Patient;
use App\Models\Hospital;
use App\Models\Login;
use Auth;
use DB;
use Crypt;
use Hash;


class PatientController extends Controller
{

    //
    public function index()
    {
        return view('Patients.home');
    }
    protected $patients, $login; 
    public function patient_login(){
        $this->patients = new Patients();
        $this->login = new Login();
    } 

    public function registration()
    {
        $hospitalsicu = Hospital::all();
        return view('Patients.register',compact('hospitalsicu'));
    }

    public function postRegistration(Request $request)
    {  
        $request->validate([
            'pat_name' => 'required',
            'pat_email' => 'required|email|unique:patients',
            'pat_address' => 'required',
            'pat_id' => 'required',
            'pat_mobile' => 'required',
            'hospital_id' => 'required',
            'login_username' => 'required',
            'login_password' => 'required|min:5|max:8',
        ]);
          
        
        $user = Login::create([
            'login_username'=>$request->input('login_username'),
            'login_password'=>Hash::make($request->input('login_password')),
            
            //'login_password' => Hash::make('login_password')
          ]);

          Patient::create([
            'login_id' => $user->id,
            'pat_name'=>$request->input('pat_name'),
            'pat_email'=>$request->input('pat_email'),
            'pat_address'=>$request->input('pat_address'),
            'pat_id'=>$request->input('pat_id'),
            'pat_mobile'=>$request->input('pat_mobile'),
            'hospital_id'=>$request->input('hospital_id')
        ]);

         
        return view("Patients.home")->withSuccess('Great! You have Successfully loggedin');
    }
    function check(Request $request)
    {
        $request->validate([
            'login_username' => 'required',
            'login_password' => 'required|min:5|max:8',
        ]);
       $user = Login::where('login_username','=',$request->login_username)->first();
       if($user){
           if(Hash::check($request->login_password,$user->login_password)){
               $request->session()->put('LoggedUser',$user->id);
               return view('Patients.profile');

           }else{
               return back()->with('fail','Invalid password');
           }

       }else{
           return back()->with('fail','No account found for this email');
       }

    }
    function profile(){
        if(session()->has('LoggedUser')){
            $user = Login::where('id','=', session('LoggedUser'))->first();
            $data = [
                'LoggedUserInfo'=>$user

            ];

        }
        
            
            return view('Patients.profile',$data);
        
    }
  

  
           
       


    }
?>
    
    

