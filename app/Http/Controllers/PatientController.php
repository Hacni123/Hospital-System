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
            'pat_email' => 'required',
            'pat_address' => 'required',
            'pat_id' => 'required',
            'pat_mobile' => 'required',
            'hospital_id' => 'required',
            'login_username' => 'required',
            'login_password' => 'required',
        ]);
           
        $user = Login::create([
            'login_username'=>$request->input('login_username'),
            'login_password'=>$request->input('login_password'),
            
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

         
        return redirect("Patients.home")->withSuccess('Great! You have Successfully loggedin');
    }

  /*  public function store(Request $req)
    {
        //$user_id =Auth::user()->id;
        DB::beginTransaction();
        try{
           // $patients = $this->patients->create
            $patients=Patient::create([
                'pat_name' => $req->pat_name,
                'pat_email' =>$req->pat_email,
                'pat_address'=>$req->pat_address,
                'pat_id'=>$req->pat_id,
                'pat_mobile'=>$req->pat_mobile
            ]);
           // $login = $this->login->create
            $login=Login::create([
                'id' , '=' ,'patients.login_id',
                'login_username' , '=','patients.pat_name',
                'login_password'=>$req->login_password
            ]);
            

            if($patients && $login){

                DB::commit();
            }else {
                DB::rollback();
            }
                return redirect::to('login');
            
           
        }
        catch(Exception $ex){
            DB::rollback();
            return redirect()->back;
        }
            
        } */


    }
    
    

