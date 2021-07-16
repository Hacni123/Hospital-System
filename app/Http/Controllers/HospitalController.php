<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;
use App\Models\Hospital;
use App\Models\Icubed;
use App\Models\Pcrtest;
use App\Models\Icubrequest;
use Illuminate\Support\Facades\DB;

class HospitalController extends Controller
{
    public function index()
    {
        return view('Hospitals.index');
    }

    //patient functions

    public function createnewpatient()
    {
        return view('Hospitals.createp');
    }

    public function allpatientdetails()
    {
        $patients = Patient::latest()->paginate(5);
        return view('Hospitals.allp',compact('patients'))->with('i', (request()->input('page', 1) - 1) * 5);
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
        $hospitals = Hospital::find(1);
        $icubeds = $hospitals->icubeds;
        return view('Hospitals.icubeds',compact('icubeds'));
        
    }

    public function viewicurequest()
    {
        $data = Hospital::join('patients', 'patients.hospital_id', '=', 'hospitals.id')
                    ->where('hospitals.id', 1)
              		->join('icubrequests', 'icubrequests.patient_id', '=', 'patients.id')
              		->get(['icubrequests.id', 'patients.pat_name', 'icubrequests.reason','patients.pat_address','patients.pat_mobile','patients.pat_id']);
        return view('Hospitals.icubedrequest',compact('data'));
    }

    //public function approveicurequest()
    //{
        //$patients = Patient::latest()->paginate(5);
        //return view('Hospitals.icubedrequest',compact('patients'))->with('i', (request()->input('page', 1) - 1) * 5);
   // }

    public function editicubrequest($id)
    {
        $icubeds1 = DB::table('icubeds')
                    ->where('hospital_id', '=', 1)
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
     
    public function rejecticubrequest($id) {
        $udpating = DB::table('icubrequests')
        ->where('id', $id)
        ->update([
             'action'=>"rejected"
        ]);
        return redirect()->route('allicubed.allicubdetails')->with('success','Updated Successfully.');
        }


    public function allicubed()
    {
        $hospitals = Hospital::find(1);
        $icubeds = $hospitals->icubeds;
        return view('Hospitals.allicu',compact('icubeds'));
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
            'hospital_id' => 'required',
        ]);

        Icubed::create($request->all());
        return redirect()->route('allicubed.allicubdetails')->with('success','Created Successfully.');
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

//pcr tests functions

public function viewallpcrrequest()
    {
        $data = Hospital::join('patients', 'patients.hospital_id', '=', 'hospitals.id')
                    ->where('hospitals.id', 1)
              		->join('pcrtests', 'pcrtests.patient_id', '=', 'patients.id')
                    ->where('pcrtests.status_hos', 'Approved')
              		->get(['pcrtests.id', 'patients.id', 'patients.pat_name', 'pcrtests.result','patients.pat_address','patients.pat_mobile','pcrtests.date','pcrtests.time','pcrtests.status_pat']);
        return view('Hospitals.allpcrrequests',compact('data'));
    }

public function viewpcrrequest()
    {
        $data = Hospital::join('patients', 'patients.hospital_id', '=', 'hospitals.id')
                    ->where('hospitals.id', 1)
              		->join('pcrtests', 'pcrtests.patient_id', '=', 'patients.id')
              		->get(['pcrtests.id', 'patients.id', 'patients.pat_name', 'pcrtests.result','patients.pat_address','patients.pat_mobile','patients.pat_id']);
        return view('Hospitals.pcrtest',compact('data'));
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

// ambulances functions
        public function viewambulance()
    {
        return view('Hospitals.ambulance');
    }
}
