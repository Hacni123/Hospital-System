<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HospitalController;
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

//Route::get('/', function () {
 //   return view('welcome');
//});

//Main route
Route::get('/', [HospitalController::class, 'index'])->name('dashboard.index');
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
Route::get('/icurequest', [HospitalController::class, 'viewicurequest']);
Route::get('/editicubrequest/{id}', [HospitalController::class, 'editicubrequest']);
Route::get('/approveicurequest', [HospitalController::class, 'approveicurequest']);
Route::get('/allicubed', [HospitalController::class, 'allicubed'])->name('allicubed.allicubdetails');
Route::get('/addicubed', [HospitalController::class, 'addicubed']);
Route::post('/addicubed', [HospitalController::class, 'addicubedadd'])->name('addicubed.store');
Route::get('/editicub/{id}', [HospitalController::class, 'editicub']);
Route::post('updateicub', [HospitalController::class, 'updateicubeds'])->name('updateicub.update');
Route::delete('deleteicub/{id}', [HospitalController::class, 'destroyicub'])->name('delete.destroyb');

//ambulances
Route::get('/ambulance', [HospitalController::class, 'viewambulance']);