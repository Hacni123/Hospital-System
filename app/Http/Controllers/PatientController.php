<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Input;
use Validator;
use Redirect;
use App\Models\Patient;
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
    public function store(Request $req)
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
            
        }
    }
    
    

