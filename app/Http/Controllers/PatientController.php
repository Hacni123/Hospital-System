<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Input;
use Validator;
use Redirect;
use App\Models\Patient;
use App\Models\Hospital;
use App\Models\Login;
use App\Models\SendCode;
use App\Models\Pcrtest;
use App\Models\Icubed;
use App\Models\Icubrequest;
use App\Models\Ambulance;
use App\Models\Ambulancerequest;

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

    public function register(Request $request)
{
    $this->validator($request->all())->validate();
    event(new postRegistration($user = $this->create($request->all())));
    return $this->postRegistration($request,$user) ?: redirect('/verify?pat_mobile='.$request->pat_mobile);
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
          
        try { 
            $user = Login::firstOrCreate([
                'login_username'=>$request->input('login_username'),
                'login_password'=>Hash::make($request->input('login_password')),
              ]);

              $usern= Patient::create([
                'login_id' => $user->id,
                'pat_name'=>$request->input('pat_name'),
                'pat_email'=>$request->input('pat_email'),
                'pat_address'=>$request->input('pat_address'),
                'pat_id'=>$request->input('pat_id'),
                'pat_mobile'=>$request->input('pat_mobile'),
                'active'=>0,
                'hospital_id'=>$request->input('hospital_id')
            ]);
            $data=request(['pat_email','login_username','login_password']);
            Mail::to('sivagnanambawanie@gmail.com')
            ->send(new \App\Mail\ContectMe($data));
            return view("Patients.login")->withSuccess('Great! You have Successfully loggedin');
          } 
          catch(\Illuminate\Database\QueryException $ex)
          { 
            return back()->with('fail','User name is taken before.');
          }

            //'login_password' => Hash::make('login_password')
          

          $usern= Patient::create([
            'login_id' => $user->id,
            'pat_name'=>$request->input('pat_name'),
            'pat_email'=>$request->input('pat_email'),
            'pat_address'=>$request->input('pat_address'),
            'pat_id'=>$request->input('pat_id'),
            'pat_mobile'=>$request->input('pat_mobile'),
            'active'=>0,
            'hospital_id'=>$request->input('hospital_id')
        ]);
        if($usern){
            $usern->code=SendCode::sendCode($usern->pat_mobile);
            $usern->save();
        }
        


       
    }
    
    function check(Request $request)
    {
        $request->validate([
            'login_username' => 'required',
            'login_password' => 'required|min:5|max:8',
        ]);
        $user = Login::where('login_username','=',$request->login_username)->first();
        $row = DB::table('patients')
                ->where('login_id','=',$user->id)
                ->first();
        $user1 = [
            'Info'=>$row
        ];


        $row = DB::table('hospitals')
                ->where('login_id','=',$user->id)
                ->first();
        $user2 = [
            'Info'=>$row
        ];

    
       if($user){
           if(Hash::check($request->login_password,$user->login_password)){
               $request->session()->put('LoggedUser',$user->id);

               if($user->login_username=='csthmb' || $user->login_username=='ranna' )
               {
               
                return Redirect::route('dashboard.index');
                
               }
               else
               {
                return view('Patients.index',$user1);

               }

               return view('Patients.index',$user1);


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
                'LoggedUserInfo'=>$use
            ];

        }

            return view('Patients.profile',$data);
    }
  

    function profilehospital(){
        if(session()->has('LoggedUser')){
            $user = Login::where('id','=', session('LoggedUser'))->first();
            $row = DB::table('hospitals')
                ->where('login_id','=',$user->id)
                ->first();
        $user2 = [
            'Info1'=>$row
        ];
        return view('Hospitals.profile',$user2);

        }    
           
    }


    public function logout(Request $request ) {
        $request->session()->flush();
        Auth::logout();
        return view('Patients.home');
        }

    
    function myappointment()
    {

        
            if(session()->has('LoggedUser')){
                $user = Login::where('id','=', session('LoggedUser'))->first();
                $icubrequests = Login::join('patients', 'patients.login_id', '=', 'login.id')
                ->where('login.id','=',$user->id)
                  ->join('icubrequests', 'icubrequests.patient_id', '=', 'patients.id')
                  ->get(['icubrequests.reason','icubrequests.action']);
                  $ambulancerequests = Login::join('patients', 'patients.login_id', '=', 'login.id')
                  ->where('login.id','=',$user->id)
                    ->join('ambulancerequests', 'ambulancerequests.patient_id', '=', 'patients.id')
                    ->get(['ambulancerequests.reason','ambulancerequests.action']);
                $pcrtests = Login::join('patients', 'patients.login_id', '=', 'login.id')
                  ->where('login.id','=',$user->id)
                    ->join('pcrtests', 'pcrtests.patient_id', '=', 'patients.id')
                    ->get(['pcrtests.result','pcrtests.date','pcrtests.time']);
                    


   
             return view('Patients.myappointment',compact('icubrequests','ambulancerequests','pcrtests'));
            
        }
        else{
            return view('Patients.login');
           }
        
    


    }

    public function index1()
    {
        return view('Patients.index1');
    }
    public function bookingicubeds()
    {
        if(session()->has('LoggedUser')){
            $user = Login::where('id','=', session('LoggedUser'))->first();
            $data = [
                'LoggedUserInfo'=>$user

            ];

        }
        $icubedid=Icubed::all();
        $patid=Patient::all();
        $icubeds = Patient::with('hospitalsicu')->get();
        return view('Patients.icubeds',compact('icubeds','icubedid','patid'));
    }

    public function bookingicu(Request $request)
    {
        if(session()->has('LoggedUser')){
            $user = Login::where('id','=', session('LoggedUser'))->first();
            $data = [
                'LoggedUserInfo'=>$user

            ];

        }
        $input =$request->all();
        Icubrequest::create($input);
        return redirect()->route('/.index1')->with('success','Request send Successfully.');
    }

    public function bookingambulance()
    {
        if(session()->has('LoggedUser')){
            $user = Login::where('id','=', session('LoggedUser'))->first();
            $data = [
                'LoggedUserInfo'=>$user

            ];

        }
        $ambid=Ambulance::all();
        $ambs = Patient::with('hospitalsamb')->get();
        return view('Patients.ambulance',compact('ambs','ambid'));
    }
    public function bookingamb(Request $request)
    {
        if(session()->has('LoggedUser')){
            $user = Login::where('id','=', session('LoggedUser'))->first();
            $data = [
                'LoggedUserInfo'=>$user

            ];

        }
        $input =$request->all();
        Ambulancerequest::create($input);
        return redirect()->route('/.index1')->with('success','Request send Successfully.');
    }
    public function bookingpcrtest()
    {
        if(session()->has('LoggedUser')){
            $user = Login::where('id','=', session('LoggedUser'))->first();
            $data = [
                'LoggedUserInfo'=>$user

            ];

        }
        $id=Pcrtest::all();
        $pcr = Patient::with('hospitalspcr')->get();
        return view('Patients.pcrtest',compact('pcr','id'));
    }
    public function bookingpcr(Request $request)
    {
        if(session()->has('LoggedUser')){
            $user = Login::where('id','=', session('LoggedUser'))->first();
            $data = [
                'LoggedUserInfo'=>$user

            ];

        }
        $input =$request->all();
        Pcrtest::create($input);
        return redirect()->route('/.index1')->with('success','Request send Successfully.');
    }
    public function bookingpcrtestcon()
    {
        if(session()->has('LoggedUser')){
            $user = Login::where('id','=', session('LoggedUser'))->first();
            $data = [
                'LoggedUserInfo'=>$user

            ];

        }
        $id=Pcrtest::all();
        $pcr = Patient::with('hospitalspcr')->get();
        return view('Patients.pcrtestavail',compact('pcr','id'));
    }
    public function bookingpcrcon(Request $request)
    {
        if(session()->has('LoggedUser')){
            $user = Login::where('id','=', session('LoggedUser'))->first();
            $data = [
                'LoggedUserInfo'=>$user

            ];

        }
        $input =$request->all();
        Pcrtest::create($input);
        return redirect()->route('/.index1')->with('success','Request send Successfully.');
    }
    public function availicubeds()
    {
        $availicu = Icubed::all();
        return view('Patients.icubedsavail',compact('availicu'));
    }
    public function availambulance()
    {
        $availamb=Ambulance::all();
        return view('Patients.ambulanceavail',compact('availamb'));
    }
    
    public function doctorsdetails()
    {
        return view('Patients.doctorsdetails');
    }
    public function contact()
    {
        return view('Patients.contact');
    }

}


?>