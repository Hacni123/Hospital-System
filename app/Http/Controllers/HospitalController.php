<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;
use App\Models\Hospital;
use App\Models\Ambulance;
use App\Models\Icubed;
use App\Models\Pcrtest;
use App\Models\Icubrequest;
use App\Models\Login;
use Auth, Hash;
use Illuminate\Support\Facades\DB;

class HospitalController extends Controller
{
    public function index()
    {
     if(session()->has('LoggedUser')){
            $user = Login::where('id','=', session('LoggedUser'))->first();
            $row = DB::table('hospitals')
                ->where('login_id','=',$user->id)
                ->first();

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
    else{
        return view('Patients.login');
        }
    }

    

    //patient functions

    public function createnewpatient()
    {
        return view('Hospitals.createp');
    }

    public function allpatientdetails()
    {
        if(session()->has('LoggedUser')){
            $user = Login::where('id','=', session('LoggedUser'))->first();
            $row = DB::table('hospitals')
                ->where('login_id','=',$user->id)
                ->first();

                $patients = Hospital::join('patients', 'patients.hospital_id', '=', 'hospitals.id')
                    ->where('hospitals.id','=', $row->id)
              		->select(['patients.id', 'patients.pat_name','patients.pat_address','patients.pat_mobile','patients.pat_id'])
                    ->paginate(5);
                      return view('Hospitals.allp',compact('patients'))->with('i', (request()->input('page', 1) - 1) * 5);
    
        }    
        else{
            return view('Patients.login');
           }

        
    }

    public function storepatient(Request $request)
    {
        $request->validate([
            'pat_name' => 'required',
            'pat_email' => 'required',
            'pat_address' => 'required',
            'pat_mobile' => 'required',
            'pat_id' => 'required',
        ]);

        Patient::create($request->all());
        return redirect()->route('allpatients.allpatientdetails')->with('success','Created Successfully.');
    }

    public function editpatient($id)
    {
        $row = DB::table('patients')
                ->where('id', $id)
                ->first();
        $patient = [
            'Info'=>$row
        ];
        return view('Hospitals.updatep',$patient);
    }

    public function updatepatient(Request $request)
    {
        $request->validate([
            'pat_name' => 'required',
            'pat_email' => 'required',
            'pat_address' => 'required',
            'pat_mobile' => 'required',
            'pat_id' => 'required',
        ]);

        $udpating = DB::table('patients')
                     ->where('id', $request->input('pid'))
                     ->update([
                          'pat_name'=>$request->input('pat_name'),
                          'pat_email'=>$request->input('pat_email'),
                          'pat_address'=>$request->input('pat_address'),
                          'pat_mobile'=>$request->input('pat_mobile'),
                          'pat_id'=>$request->input('pat_id')
                     ]);
        return redirect()->route('allpatients.allpatientdetails')->with('success','Updated Successfully.');
    }


   public function destroypatient($id)
    {
    DB::delete('delete from patients where id = ?',[$id]);
    return redirect()->route('allpatients.allpatientdetails')->with('success','Updated Successfully.');
    }

      //ICU beds functions
    public function viewicubeds()
    {
        if(session()->has('LoggedUser')){
            $user = Login::where('id','=', session('LoggedUser'))->first();
            $icubeds = Login::join('hospitals', 'hospitals.login_id', '=', 'login.id')
                    ->where('login.id','=',$user->id)
              		->join('icubeds', 'icubeds.hospital_id', '=', 'hospitals.id')
              		->get();
        
       
        return view('Hospitals.icubeds',compact('icubeds'));
        
    }
    else{
         return view('Patients.login');
        }
    }
    public function allicubed()
    {

        if(session()->has('LoggedUser')){
            $user = Login::where('id','=', session('LoggedUser'))->first();
            $icubeds = Login::join('hospitals', 'hospitals.login_id', '=', 'login.id')
                    ->where('login.id','=',$user->id)
              		->join('icubeds', 'icubeds.hospital_id', '=', 'hospitals.id')
              		->get();
        
       
            return view('Hospitals.allicu',compact('icubeds'));
        
    }
    else{
        return view('Patients.login');
       }
    }

    public function addicubed()
    {
        $hospitals=Hospital::all();
        return view('Hospitals.addicu',compact('hospitals'));
    }

    public function addicubedadd(Request $request)
    {
        $request->validate([
            'ward_no' => 'required',
            'status' => 'required',
    
        ]);
        if(session()->has('LoggedUser')){
            $user = Login::where('id','=', session('LoggedUser'))->first();
            $row = DB::table('hospitals')
                ->where('login_id','=',$user->id)
                ->first();

                Icubed::create([
                    'hospital_id' => $row->id,
                    'ward_no'=>$request->input('ward_no'),
                    'status'=>$request->input('status')
                ]);
                    return redirect()->route('allicubed.allicubdetails')->with('success','Created Successfully.');

        } 

        else{
            return view('Patients.login');
           }
        
    }

    public function editicub($id)
    {
        $row = DB::table('icubeds')
                ->where('id', $id)
                ->first();
        $icubeds = [
            'Info'=>$row
        ];
        return view('Hospitals.updateb',$icubeds);
    }

    public function updateicubeds(Request $request)
    {
        $request->validate([
            'ward_no' => 'required',
            'status' => 'required',
        ]);

        $udpating = DB::table('icubeds')
                     ->where('id', $request->input('bid'))
                     ->update([
                          'ward_no'=>$request->input('ward_no'),
                          'status'=>$request->input('status')
                     ]);
        return redirect()->route('allicubed.allicubdetails')->with('success','Updated Successfully.');
    }

    public function destroyicub($id) {
        DB::delete('delete from icubeds where id = ?',[$id]);
        return redirect()->route('allicubed.allicubdetails')->with('success','Updated Successfully.');
        }

//icu bed requests
    public function viewicurequest()
    {
        if(session()->has('LoggedUser')){
            $user = Login::where('id','=', session('LoggedUser'))->first();
            $row = DB::table('hospitals')
                ->where('login_id','=',$user->id)
                ->first();

                $data = Hospital::join('patients', 'patients.hospital_id', '=', 'hospitals.id')
                    ->where('hospitals.id','=', $row->id)
                    ->where('action', 'pending')
              		->join('icubrequests', 'icubrequests.patient_id', '=', 'patients.id')
              		->get(['icubrequests.id', 'patients.pat_name', 'icubrequests.reason','patients.pat_address','patients.pat_mobile','patients.pat_id']);
        return view('Hospitals.icubedrequest',compact('data'));
        }    
        else{
            return view('Patients.login');
           }
    }

   

    //public function approveicurequest()
    //{
        //$patients = Patient::latest()->paginate(5);
        //return view('Hospitals.icubedrequest',compact('patients'))->with('i', (request()->input('page', 1) - 1) * 5);
   // }

    public function editicubrequest($id)
    {

        if(session()->has('LoggedUser')){
            $user = Login::where('id','=', session('LoggedUser'))->first();
            $row = DB::table('hospitals')
                ->where('login_id','=',$user->id)
                ->first();

                $icubeds1 = DB::table('icubeds')
                    ->where('hospital_id','=', $row->id)
                    ->Where('status', 'Availabe')
                    ->get();
        $row = DB::table('icubrequests')
                ->where('id', $id)
                ->first();
        $icubeds = [
            'Info'=>$row
        ];
        return view('Hospitals.icubedrequestapprove',$icubeds,compact('icubeds1'));
        } 
        
        else{
            return view('Patients.login');
           }

       
    }

    public function confirmicurequest(Request $request)
    {
        $request->validate([
            'action' => 'required',
            'icubed_id' => 'required',
        ]);

        $udpating = DB::table('icubrequests')
                     ->where('id', $request->input('icuid'))
                     ->update([
                          'action'=>$request->input('action'),
                          'icubed_id'=>$request->input('icubed_id')
                     ]);

        $udpating = DB::table('icubeds')
                     ->where('id', $request->input('icubed_id'))
                     ->update(array('status' => 'Not Availabe'));
            return redirect()->route('icurequest.allicurequest')->with('success','Updated Successfully.');
    }
     
    public function rejecticubrequest(Request $request) {

        $udpating = DB::table('icubrequests')
                     ->where('id', $request->input('bid'))
                     ->update([
                          'action'=>"rejected"
                     ]);
        return redirect()->route('icurequest.allicurequest')->with('success','Rejected Successfully.');
        }

        public function viewapprovedicurequest()
        {
            if(session()->has('LoggedUser')){
                $user = Login::where('id','=', session('LoggedUser'))->first();
                $row = DB::table('hospitals')
                    ->where('login_id','=',$user->id)
                    ->first();
    
                    $data = Hospital::join('patients', 'patients.hospital_id', '=', 'hospitals.id')
                        ->where('hospitals.id','=', $row->id)
                        ->where('action', 'confirmed')
                          ->join('icubrequests', 'icubrequests.patient_id', '=', 'patients.id')
                          ->get(['icubrequests.id','icubrequests.action', 'patients.pat_name', 'icubrequests.reason','patients.pat_address','patients.pat_mobile','patients.pat_id']);
            return view('Hospitals.viewapproveicubedr',compact('data'));
            }    
            else{
                return view('Patients.login');
               }
        }
    
        public function notviewapprovedicurequest()
        {
            if(session()->has('LoggedUser')){
                $user = Login::where('id','=', session('LoggedUser'))->first();
                $row = DB::table('hospitals')
                    ->where('login_id','=',$user->id)
                    ->first();
    
                    $data = Hospital::join('patients', 'patients.hospital_id', '=', 'hospitals.id')
                    ->where('hospitals.id','=', $row->id)
                    ->where('action', 'rejected')
                      ->join('icubrequests', 'icubrequests.patient_id', '=', 'patients.id')
                      ->get(['icubrequests.id','icubrequests.action', 'patients.pat_name', 'icubrequests.reason','patients.pat_address','patients.pat_mobile','patients.pat_id']);
        return view('Hospitals.viewapproveicubedr',compact('data'));
            }  
            else{
                return view('Patients.login');
               }
           
        }

    

//pcr tests functions

public function viewallpcrrequest()
    {
        if(session()->has('LoggedUser')){
            $user = Login::where('id','=', session('LoggedUser'))->first();
            $row = DB::table('hospitals')
                ->where('login_id','=',$user->id)
                ->first();

                $data = Hospital::join('patients', 'patients.hospital_id', '=', 'hospitals.id')
                    ->where('hospitals.id','=', $row->id)
              		->join('pcrtests', 'pcrtests.patient_id', '=', 'patients.id')
              		->get(['pcrtests.id', 'patients.id', 'patients.pat_name', 'pcrtests.result','patients.pat_address','patients.pat_mobile','pcrtests.date','pcrtests.time','pcrtests.status_pat']);
                      return view('Hospitals.allpcrrequests',compact('data'));
        }    
        else{
            return view('Patients.login');
           }
    }

public function viewpcrrequest()
    {
        if(session()->has('LoggedUser')){
            $user = Login::where('id','=', session('LoggedUser'))->first();
            $row = DB::table('hospitals')
                ->where('login_id','=',$user->id)
                ->first();

                $data = Hospital::join('patients', 'patients.hospital_id', '=', 'hospitals.id')
                    ->where('hospitals.id','=', $row->id)
                    ->where('status_hos', 'pending')
              		->join('pcrtests', 'pcrtests.patient_id', '=', 'patients.id')
              		->get(['pcrtests.id', 'patients.pat_name', 'pcrtests.result','patients.pat_address','patients.pat_mobile','patients.pat_id','pcrtests.date','pcrtests.time','pcrtests.status_pat']);
                      return view('Hospitals.pcrtest',compact('data'));
        }    
        else{
            return view('Patients.login');
           }
    }

    public function editpcrrequest($id)
    {
        $row = DB::table('pcrtests')
                ->where('id', $id)
                ->first();
        $icubeds = [
            'Info'=>$row
        ];
        return view('Hospitals.pcrrequestapprove',$icubeds);
    }

    public function updatepcrrequest(Request $request)
    {
        $request->validate([
            'date' => 'required',
            'time' => 'required',
        ]);

        $udpating = DB::table('pcrtests')
                     ->where('id', $request->input('pcrid'))
                     ->update([
                          'date'=>$request->input('date'),
                          'time'=>$request->input('time')
                     ]);

        $udpating = DB::table('pcrtests')
                     ->where('id', $request->input('pcrid'))
                     ->update(array('status_hos' => 'Approved'));
        return redirect()->route('pcrrequest.allpcrrequest')->with('success','Updated Successfully.');
    }

    public function rejectpcrrequest(Request $request) {

        $udpating = DB::table('pcrtests')
                     ->where('id', $request->input('bid'))
                     ->update([
                          'status_hos'=>"rejected"
                     ]);
        return redirect()->route('icurequest.allicurequest')->with('success','Rejected Successfully.');
        }

        public function viewpendingpcrrequest()
    {
        if(session()->has('LoggedUser')){
            $user = Login::where('id','=', session('LoggedUser'))->first();
            $row = DB::table('hospitals')
                ->where('login_id','=',$user->id)
                ->first();

                $data = Hospital::join('patients', 'patients.hospital_id', '=', 'hospitals.id')
                    ->where('hospitals.id','=', $row->id)
                    ->where('status_hos', 'Approved')
                    ->where('status_pat', 'pending')
              		->join('pcrtests', 'pcrtests.patient_id', '=', 'patients.id')
              		->get(['pcrtests.id', 'patients.pat_name', 'pcrtests.result','patients.pat_address','patients.pat_mobile','patients.pat_id','pcrtests.date','pcrtests.time','pcrtests.status_pat']);
                      return view('Hospitals.viewapprovedpcrrequest',compact('data'));
        }    
        else{
            return view('Patients.login');
           }  
    }

    public function viewconfirmedpcrrequest()
    {
        if(session()->has('LoggedUser')){
            $user = Login::where('id','=', session('LoggedUser'))->first();
            $row = DB::table('hospitals')
                ->where('login_id','=',$user->id)
                ->first();

                $data = Hospital::join('patients', 'patients.hospital_id', '=', 'hospitals.id')
                    ->where('hospitals.id','=', $row->id)
              		->join('pcrtests', 'pcrtests.patient_id', '=', 'patients.id')
                    ->where('status_hos', 'Approved')
                    ->where('status_pat', 'Approved')
              		->get(['pcrtests.id', 'patients.pat_name', 'pcrtests.result','patients.pat_address','patients.pat_mobile','patients.pat_id','pcrtests.date','pcrtests.time','pcrtests.status_pat']);
                      return view('Hospitals.viewapprovedpcrrequest',compact('data'));
        }    
        else{
            return view('Patients.login');
           }  
    }

    public function viewrejectedpcrrequest()
    {
        if(session()->has('LoggedUser')){
            $user = Login::where('id','=', session('LoggedUser'))->first();
            $row = DB::table('hospitals')
                ->where('login_id','=',$user->id)
                ->first();

                $data = Hospital::join('patients', 'patients.hospital_id', '=', 'hospitals.id')
                    ->where('hospitals.id','=', $row->id)
              		->join('pcrtests', 'pcrtests.patient_id', '=', 'patients.id')
                    ->where('status_hos', 'rejected')
              		->get(['pcrtests.id', 'patients.pat_name', 'pcrtests.result','patients.pat_address','patients.pat_mobile','patients.pat_id','pcrtests.date','pcrtests.time','pcrtests.status_hos']);
                      return view('Hospitals.viewrejectedpcrr',compact('data'));
        }    
        else{
            return view('Patients.login');
           }  
    }

    public function viewpcrreport()
    {
        if(session()->has('LoggedUser')){
            $user = Login::where('id','=', session('LoggedUser'))->first();
            $row = DB::table('hospitals')
                ->where('login_id','=',$user->id)
                ->first();

                $data = Hospital::join('patients', 'patients.hospital_id', '=', 'hospitals.id')
                    ->where('hospitals.id','=', $row->id)
                    ->where('result', 'not yet')
              		->join('pcrtests', 'pcrtests.patient_id', '=', 'patients.id')
              		->get(['pcrtests.id', 'patients.pat_name', 'pcrtests.result','patients.pat_address','patients.pat_mobile','patients.pat_id','pcrtests.date','pcrtests.time','pcrtests.status_pat']);
                      return view('Hospitals.pcrresult',compact('data'));
        }    
        else{
            return view('Patients.login');
           }
    }

    public function editpcrresult($id)
    {
        $row = DB::table('pcrtests')
                ->where('id', $id)
                ->first();
        $icubeds = [
            'Info'=>$row
        ];
        return view('Hospitals.updatepcrresult',$icubeds);
    }

    public function updatepcrresult(Request $request)
    {
        $request->validate([
            'result' => 'required',
        ]);

        $udpating = DB::table('pcrtests')
                     ->where('id', $request->input('bid'))
                     ->update([
                          'result'=>$request->input('result')
                     ]);

        $udpating = DB::table('pcrtests')
                     ->where('id', $request->input('pcrid'))
                     ->update(array('status_hos' => 'Approved'));
        return redirect()->route('pcrrequest.allpcrrequest')->with('success','Updated Successfully.');
    }


    public function viewpositiveresult()
    {
        if(session()->has('LoggedUser')){
            $user = Login::where('id','=', session('LoggedUser'))->first();
            $row = DB::table('hospitals')
                ->where('login_id','=',$user->id)
                ->first();

                $data = Hospital::join('patients', 'patients.hospital_id', '=', 'hospitals.id')
                    ->where('hospitals.id','=', $row->id)
                    ->where('result', 'Positive')
              		->join('pcrtests', 'pcrtests.patient_id', '=', 'patients.id')
              		->get(['pcrtests.id', 'patients.pat_name', 'pcrtests.result','patients.pat_address','patients.pat_mobile','patients.pat_id','pcrtests.date','pcrtests.time','pcrtests.status_pat']);
                      return view('Hospitals.viewpositive',compact('data'));
        }    
        else{
            return view('Patients.login');
           }
    }

    public function viewnegativeresult()
    {
        if(session()->has('LoggedUser')){
            $user = Login::where('id','=', session('LoggedUser'))->first();
            $row = DB::table('hospitals')
                ->where('login_id','=',$user->id)
                ->first();

                $data = Hospital::join('patients', 'patients.hospital_id', '=', 'hospitals.id')
                    ->where('hospitals.id','=', $row->id)
                    ->where('result', 'Negative')
              		->join('pcrtests', 'pcrtests.patient_id', '=', 'patients.id')
              		->get(['pcrtests.id', 'patients.pat_name', 'pcrtests.result','patients.pat_address','patients.pat_mobile','patients.pat_id','pcrtests.date','pcrtests.time','pcrtests.status_pat']);
                      return view('Hospitals.viewpositive',compact('data'));
        }    
        else{
            return view('Patients.login');
           }
    }
// ambulances functions

    public function viewambulance()
    {
        if(session()->has('LoggedUser')){
            $user = Login::where('id','=', session('LoggedUser'))->first();
            $ambulances = Login::join('hospitals', 'hospitals.login_id', '=', 'login.id')
                    ->where('login.id','=',$user->id)
              		->join('ambulances', 'ambulances.hospital_id', '=', 'hospitals.id')
              		->get();
       
        return view('Hospitals.ambulance',compact('ambulances'));
        
    }
    else{
        return view('Patients.login');
       }
    }
    public function allambulance()
    {
        if(session()->has('LoggedUser')){
            $user = Login::where('id','=', session('LoggedUser'))->first();
            $ambulances = Login::join('hospitals', 'hospitals.login_id', '=', 'login.id')
                    ->where('login.id','=',$user->id)
              		->join('ambulances', 'ambulances.hospital_id', '=', 'hospitals.id')
              		->get();
        
       
            return view('Hospitals.allambulances',compact('ambulances'));
        
    }
    else{
        return view('Patients.login');
       }
    }

    public function addambulance()
    {
        $hospitals=Hospital::all();
        return view('Hospitals.addambulance',compact('hospitals'));
    }

    public function addambulancenew(Request $request)
    {
        $request->validate([
            'status' => 'required',
    
        ]);
        if(session()->has('LoggedUser')){
            $user = Login::where('id','=', session('LoggedUser'))->first();
            $row = DB::table('hospitals')
                ->where('login_id','=',$user->id)
                ->first();

                Ambulance::create([
                    'hospital_id' => $row->id,
                    'status'=>$request->input('status')
                ]);
                    return redirect()->route('allambulance.allambdetails')->with('success','Created Successfully.');

        }  
        else{
            return view('Patients.login');
           }
    }

    public function editambulances($id)
    {
        $row = DB::table('ambulances')
                ->where('id', $id)
                ->first();
        $ambulances = [
            'Info'=>$row
        ];
        return view('Hospitals.updateamb',$ambulances);
    }

    public function updateambulances(Request $request)
    {
        $request->validate([
            'status' => 'required',
        ]);

        $udpating = DB::table('ambulances')
                     ->where('id', $request->input('bid'))
                     ->update([
                          'status'=>$request->input('status')
                     ]);
        return redirect()->route('allambulance.allambdetails')->with('success','Updated Successfully.');
    }

    public function destroyambulance ($id) {
        DB::delete('delete from ambulances where id = ?',[$id]);
        return redirect()->route('allambulance.allambdetails')->with('success','Deleted Successfully.');
        }

// ambulances requests

public function viewambrequest()
{
    if(session()->has('LoggedUser')){
        $user = Login::where('id','=', session('LoggedUser'))->first();
        $row = DB::table('hospitals')
            ->where('login_id','=',$user->id)
            ->first();

            $data = Hospital::join('patients', 'patients.hospital_id', '=', 'hospitals.id')
                ->where('hospitals.id','=', $row->id)
                ->where('action', 'pending')
                  ->join('ambulancerequests', 'ambulancerequests.patient_id', '=', 'patients.id')
                  ->get(['ambulancerequests.id', 'patients.pat_name', 'ambulancerequests.reason','patients.pat_address','patients.pat_mobile','patients.pat_id']);
    return view('Hospitals.ambrequest',compact('data'));
    }    
    else{
        return view('Patients.login');
       }
}

public function editambrequest($id)
    {

        if(session()->has('LoggedUser')){
            $user = Login::where('id','=', session('LoggedUser'))->first();
            $row = DB::table('hospitals')
                ->where('login_id','=',$user->id)
                ->first();

                $icubeds1 = DB::table('ambulances')
                    ->where('hospital_id','=', $row->id)
                    ->Where('status', 'Availabe')
                    ->get();
        $row = DB::table('ambulancerequests')
                ->where('id', $id)
                ->first();
        $icubeds = [
            'Info'=>$row
        ];
        return view('Hospitals.ambrequestapprove',$icubeds,compact('icubeds1'));
        } 
        
        else{
            return view('Patients.login');
           }

       
    }

    public function confirmambrequest(Request $request)
    {
        $request->validate([
            'action' => 'required',
            'ambulance_id' => 'required',
        ]);

        $udpating = DB::table('ambulancerequests')
                     ->where('id', $request->input('icuid'))
                     ->update([
                          'action'=>$request->input('action'),
                          'ambulance_id'=>$request->input('ambulance_id')
                     ]);

        $udpating = DB::table('ambulances')
                     ->where('id', $request->input('ambulance_id'))
                     ->update(array('status' => 'Not Availabe'));
            return redirect()->route('ambrequest.allambrequest')->with('success','Updated Successfully.');
    }
     
    public function rejectambbrequest(Request $request) {

        $udpating = DB::table('ambulancerequests')
                     ->where('id', $request->input('bid'))
                     ->update([
                          'action'=>"rejected"
                     ]);
        return redirect()->route('ambrequest.allambrequest')->with('success','Rejected Successfully.');
        }

        public function viewapprovedambrequest()
        {
            if(session()->has('LoggedUser')){
                $user = Login::where('id','=', session('LoggedUser'))->first();
                $row = DB::table('hospitals')
                    ->where('login_id','=',$user->id)
                    ->first();
    
                    $data = Hospital::join('patients', 'patients.hospital_id', '=', 'hospitals.id')
                        ->where('hospitals.id','=', $row->id)
                        ->where('action', 'confirmed')
                          ->join('ambulancerequests', 'ambulancerequests.patient_id', '=', 'patients.id')
                          ->get(['ambulancerequests.id','ambulancerequests.action', 'patients.pat_name', 'ambulancerequests.reason','patients.pat_address','patients.pat_mobile','patients.pat_id']);
            return view('Hospitals.viewapproveambrequest',compact('data'));
            }    
            else{
                return view('Patients.login');
               }
        }
    
        public function notviewapprovedambrequest()
        {
            if(session()->has('LoggedUser')){
                $user = Login::where('id','=', session('LoggedUser'))->first();
                $row = DB::table('hospitals')
                    ->where('login_id','=',$user->id)
                    ->first();
    
                    $data = Hospital::join('patients', 'patients.hospital_id', '=', 'hospitals.id')
                    ->where('hospitals.id','=', $row->id)
                    ->where('action', 'rejected')
                      ->join('ambulancerequests', 'ambulancerequests.patient_id', '=', 'patients.id')
                      ->get(['ambulancerequests.id','ambulancerequests.action', 'patients.pat_name', 'ambulancerequests.reason','patients.pat_address','patients.pat_mobile','patients.pat_id']);
        return view('Hospitals.viewapproveambrequest',compact('data'));
            }  
            else{
                return view('Patients.login');
               }
           
        }

//counting functions

public function counticubedreq()
        {
           
           
        }

//Change password
        function changePassword(){
            if(session()->has('LoggedUser')){
                $user = Login::where('id','=', session('LoggedUser'))->first();
                $row = DB::table('hospitals')
                    ->where('login_id','=',$user->id)
                    ->first();
            $user2 = [
                'Info1'=>$row
            ];
            return view('Hospitals.changepass',$user2);
    
            }    
               
        }

        public function updatePassword(Request $request)
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

    public function logout(Request $request ) {
        $request->session()->flush();
        Auth::logout();
        return view('Patients.home');
        }
}
