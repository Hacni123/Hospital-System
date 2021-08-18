<?php

namespace App\Http\Controllers;
use App\Models\Patient;

use Illuminate\Http\Request;

class VerifyController extends Controller
{
    public function getVerify(){
        return view('Patients.verify');
    }
    public function postVerify(Request $request){
        if($user=Patient::where('code',$request->code)->first()){
            $user->active=1;
            $user->code=null;
            $user->save();

            return redirect()->route('post-registration')->withMessage('Your account is active');

            return redirect()->route('check')->withMessage('Your account is active');

        }
        else{
            return back()->withMessage('verify code is not correct. Please try again');
        }
    }
}
