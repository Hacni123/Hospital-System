<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Patient;
use App\Models\Admin;

class AdminController extends Controller
{
    public function index()
    {
        return view('Admin.adminindex');
    }

    public function show()
    {  // $alllist = patients::all();
        $showpatients = Admin::all();
        return view('Admin.apatientlist',compact('showpatients'));
    }
    
    public function allicubeds()
    {
        $showbeds = Admin::all();
        return view('Admin.aicubeds',compact('showbeds'));
    }
    
    
    public function check()
    {  // $alllist = patients::all();
        return Admin::all();
        return view('Admin.check');
    }
}
