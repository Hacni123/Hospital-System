<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HospitalController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\AdminController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/dashboard', [HospitalController::class, 'index'])->name('dashboard.index');
//patient
Route::get('/addnewpatient', [HospitalController::class, 'createnewpatient']);
Route::post('/addnewpatient', [HospitalController::class, 'storepatient'])->name('addnewpatient.store');
Route::get('/allpatients', [HospitalController::class, 'allpatientdetails'])->name('allpatients.allpatientdetails');
Route::get('/edit/{id}', [HospitalController::class, 'editpatient']);
Route::post('updatepatient', [HospitalController::class, 'updatepatient'])->name('updatepatient.update');
Route::delete('delete/{id}', [HospitalController::class, 'destroypatient'])->name('delete.destroy');

//icu beds
Route::get('/icubeds', [HospitalController::class, 'viewicubeds']);
Route::get('/icurequest', [HospitalController::class, 'viewicurequest'])->name('icurequest.allicurequest');
Route::get('/editicubrequest/{id}', [HospitalController::class, 'editicubrequest']);
Route::post('/approveicurequest', [HospitalController::class, 'confirmicurequest'])->name('approveicurequest.update');
Route::post('/notapproveicurequest', [HospitalController::class, 'rejecticubrequest'])->name('notapproveicurequest.update');
Route::get('/allicubed', [HospitalController::class, 'allicubed'])->name('allicubed.allicubdetails');
Route::get('/addicubed', [HospitalController::class, 'addicubed']);
Route::post('/addicubed', [HospitalController::class, 'addicubedadd'])->name('addicubed.store');
Route::get('/editicub/{id}', [HospitalController::class, 'editicub']);
Route::post('updateicub', [HospitalController::class, 'updateicubeds'])->name('updateicub.update');
Route::delete('deleteicub/{id}', [HospitalController::class, 'destroyicub'])->name('delete.destroyb');

//ambulances
Route::get('/ambulance', [HospitalController::class, 'viewambulance']);

//pcr tests
Route::get('/pcrrequest', [HospitalController::class, 'viewpcrrequest'])->name('pcrrequest.allpcrrequest');
Route::get('/editpcrrequest/{id}', [HospitalController::class, 'editpcrrequest']);
Route::post('/approvepcrrequest', [HospitalController::class, 'updatepcrrequest'])->name('approvepcrrequest.update');
Route::get('/allpcrrequest', [HospitalController::class, 'viewallpcrrequest'])->name('allpcrrequest.allpcrrequestdetails');



//admin
Route::get('/aindex','AdminController@index');
Route::get('/apatientList','AdminController@show');
Route::get('/aicubeds','AdminController@allicubeds');
Route::get('/apatientList/{patientid}','AdminController@show');
Route::get('/ahospitals','AdminController@allhospitals');
Route::get('/avaamb','AdminController@avaambulance');
Route::get('/abkbeds','AdminController@bookbeds');
Route::get('/abkamb','AdminController@bookambulance');
Route::get('/atest','AdminController@test');
Route::get('/atestres','AdminController@testresults');

//hospital registration
//Route::get('/hosreg','AdminController@hospitalregisterview');
Route::get('/hosreg','AdminController@addhospital');
Route::post('/hosreg','AdminController@savehospital');
Route::post('/hosreg','AdminController@hospitalregister');

Route::get('/check','AdminController@check');



//patient functions
Route::get('/', function () {
   return view('Patients.home');
});
Route::get('/login', function () {
   return view('Patients.login');
});
//Route::get('/register', function () {
 //  return view('Patients.register');
//});
Route::get('/otp', function () {
   return view('Patients.otp');
});

//Route::post('/register_action','PatientController@store');
Route::get('/pregister', [PatientController::class, 'registration']);
Route::post('post-registration', [PatientController::class, 'postRegistration'])->name('register.post'); 
Route::get('/verify','VerifyController@getVerify')->name('getverify');
Route::post('/verify','VerifyController@postVerify')->name('verify');
Route::post('check','PatientController@check')->name('login.post');

Route::get('check','PatientController@check');
Route::get('profile','PatientController@profile');
Route::get('logout', 'PatientController@logout');
