<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;
use App\Models\Hospital;
use App\Models\Icubed;
use Illuminate\Support\Facades\DB;

class HospitalController extends Controller
{
    public function index()
    {
        return view('Hospitals.index');
    }

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

    public function viewicubeds()
    {
        return view('Hospitals.icubeds');
    }

    public function viewambulance()
    {
        return view('Hospitals.ambulance');
    }

    public function viewicurequest()
    {
        $patients = Patient::latest()->paginate(5);
        return view('Hospitals.icubedrequest',compact('patients'))->with('i', (request()->input('page', 1) - 1) * 5);
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
}
