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
Route::get('/allicubed', [HospitalController::class, 'allicubed'])->name('allicubed.allicubdetails');
Route::get('/addicubed', [HospitalController::class, 'addicubed']);
Route::post('/addicubed', [HospitalController::class, 'addicubedadd'])->name('addicubed.store');
Route::get('/editicub/{id}', [HospitalController::class, 'editicub']);
Route::post('updateicub', [HospitalController::class, 'updateicubeds'])->name('updateicub.update');
Route::delete('deleteicub/{id}', [HospitalController::class, 'destroyicub'])->name('delete.destroyb');

//icu bed requests
Route::get('/icurequest', [HospitalController::class, 'viewicurequest'])->name('icurequest.allicurequest');
Route::get('/editicubrequest/{id}', [HospitalController::class, 'editicubrequest']);
Route::post('/approveicurequest', [HospitalController::class, 'confirmicurequest'])->name('approveicurequest.update');
Route::post('/notapproveicurequest', [HospitalController::class, 'rejecticubrequest'])->name('notapproveicurequest.update');
Route::get('/viewapprovedicurequest', [HospitalController::class, 'viewapprovedicurequest']);
Route::get('/notviewapprovedicurequest', [HospitalController::class, 'notviewapprovedicurequest']);


//ambulances
Route::get('/ambulance', [HospitalController::class, 'viewambulance']);
Route::get('/allambulance', [HospitalController::class, 'allambulance'])->name('allambulance.allambdetails');
Route::get('/addambulance', [HospitalController::class, 'addambulance']);
Route::post('/addambulance', [HospitalController::class, 'addambulancenew'])->name('addambulance.store');
Route::get('/editambulance/{id}', [HospitalController::class, 'editambulances']);
Route::post('updateambulance', [HospitalController::class, 'updateambulances'])->name('updateambulance.update');
Route::delete('deleteambulance/{id}', [HospitalController::class, 'destroyambulance'])->name('deleteambulance.destroyamb');

// ambulances requests
Route::get('/ambrequest', [HospitalController::class, 'viewambrequest'])->name('ambrequest.allambrequest');
Route::get('/editambbrequest/{id}', [HospitalController::class, 'editambrequest']);
Route::post('/approveambrequest', [HospitalController::class, 'confirmambrequest'])->name('approveambrequest.update');
Route::post('/notapproveambrequest', [HospitalController::class, 'rejectambbrequest'])->name('notapproveambrequest.update');
Route::get('/viewapprovedambrequest', [HospitalController::class, 'viewapprovedambrequest']);
Route::get('/notviewapprovedambrequest', [HospitalController::class, 'notviewapprovedambrequest']);

//pcr tests
Route::get('/pcrrequest', [HospitalController::class, 'viewpcrrequest'])->name('pcrrequest.allpcrrequest');
Route::get('/editpcrrequest/{id}', [HospitalController::class, 'editpcrrequest']);
Route::post('/approvepcrrequest', [HospitalController::class, 'updatepcrrequest'])->name('approvepcrrequest.update');
Route::get('/allpcrrequest', [HospitalController::class, 'viewallpcrrequest'])->name('allpcrrequest.allpcrrequestdetails');
Route::post('/notapprovepcrrequest', [HospitalController::class, 'rejectpcrrequest'])->name('notapprovepcrrequest.update');
Route::get('/viewapprovedpcrrequest', [HospitalController::class, 'viewconfirmedpcrrequest']);
Route::get('/viewpendingpcrrequest', [HospitalController::class, 'viewpendingpcrrequest']);
Route::get('/viewrejectedpcrrequest', [HospitalController::class, 'viewrejectedpcrrequest']);
//pcr results
Route::get('/pcrresult', [HospitalController::class, 'viewpcrreport'])->name('pcrresult.allpcrreports');
Route::get('/editpcrresult/{id}', [HospitalController::class, 'editpcrresult']);
Route::post('/approvepcrresult', [HospitalController::class, 'updatepcrresult'])->name('approvepcrresult.update');
Route::get('/viewpositiveresult', [HospitalController::class, 'viewpositiveresult']);
Route::get('/viewnegativeresult', [HospitalController::class, 'viewnegativeresult']);

//change password
Route::get('/editpassword', [HospitalController::class, 'changePassword']);
Route::post('/updatepass', [HospitalController::class, 'updatePassword'])->name('updatepass.update');
Route::get('/logout', [HospitalController::class, 'logout']);

//get counts
Route::get('/counticubedr', [HospitalController::class, 'counticubedreq']);


//--------------------------------------------------------------------------------------------------------------------------------------------------------------------
//admin

Route::get('/aindex', [AdminController::class, 'index'])->name('admindashboard.index');
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

Route::get('/hosregadd', [AdminController::class, 'addhospital']);
Route::post('/hospitalreg', [AdminController::class, 'savehospital'])->name('addnewhospital.store');
//Route::post('/hospitalregemail','AdminController@hospitalregister');

// check



// Admin login registration

Route::get('/adminlogin', [AdminController::class, 'adminlogin'])->name('admin.login');
Route::post('/apostlogin', [AdminController::class, 'postLogin'])->name('adminlogin.post'); 
Route::get('/aregistration', [AdminController::class, 'registration'])->name('register');
Route::post('/apost-registration', [AdminController::class, 'postRegistration'])->name('register.postadmin'); 
Route::get('/adashboard', [AdminController::class, 'dashboard']); 
Route::get('/alogout', [AdminController::class, 'logout']);















//-------------------------------------------------------------------------------------------------------------------------- //
Route::get('/',[PatientController::class, 'index']);

//Route::get('/', function () {
  // return view('Patients.home'); 
//});
Route::get('/index',function(){
   return view('Patients.index');
});

Route::get('/login', function () {
   return view('Patients.login');
});
//Route::get('/register', function () {
 // return view('Patients.register');
//});
//Route::get('/myappointment', function () {
  // return view('Patients.myappointment');
//});
Route::get('/otpafter', function () {
   return view('Patients.index');
});

//Route::post('/register_action','PatientController@store');
Route::get('/pregister', [PatientController::class, 'registration']);
Route::post('post-registration', [PatientController::class, 'postRegistration'])->name('register.post'); 
Route::get('/verify','VerifyController@getVerify')->name('getverify');
Route::post('/verify','VerifyController@postVerify')->name('verify');
Route::post('check','PatientController@check')->name('login.post');
Route::get('profile','PatientController@profile');
Route::get('/hprofile', [PatientController::class, 'profilehospital']);
Route::get('logout', 'PatientController@logout');
Route::get('/verify','verifyController@getVerify')->name('getverify');
Route::post('/verify','verifyController@postVerify')->name('verify');
Route::get('myappointment', [PatientController::class, 'myappointment']);


Route::get('/index1',[PatientController::class, 'index1'])->name('/.index1');
Route::get('/icubedsP',[PatientController::class, 'bookingicubeds'])->name('icubedsP.bookingicubeds');
Route::post('/icubedsP',[PatientController::class, 'bookingicu'])->name('icubedsP.bookingicu');
Route::get('/ambulanceP',[PatientController::class, 'bookingambulance'])->name('ambulanceP.bookingambulance');
Route::post('/ambulanceP',[PatientController::class, 'bookingamb'])->name('ambulanceP.bookingamb');
Route::get('/pcrtestP',[PatientController::class, 'bookingpcrtest'])->name('pcrtestP.bookingpcrtest');
Route::post('/pcrtestP',[PatientController::class, 'bookingpcr'])->name('pcrtestP.bookingpcr');
Route::get('/pcrtestavailP',[PatientController::class, 'bookingpcrtestcon'])->name('pcrtestavailP.bookingpcrtestcon');
Route::post('/pcrtestavailP',[PatientController::class, 'bookingpcrcon'])->name('pcrtestavailP.bookingpcrcon');
Route::get('/icubedsavail',[PatientController::class, 'availicubeds']);
Route::get('/ambulanceavail',[PatientController::class, 'availambulance']);
Route::get('/doctorsdetails',[PatientController::class, 'doctorsdetails']);
Route::get('/contact',[PatientController::class, 'contact']);
