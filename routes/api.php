<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

////Create
Route::post('/signUp', 'UserController@create');
Route::post('/consultation', 'ConsultationController@create');
Route::post('/pharmacyVisit', 'PharmacyVisitController@create');
Route::post('/addDisability', 'DisabilityController@create');


//Get
Route::get('getConsultation/{patient_id}', 'ConsultationController@show');
Route::get('getSingleConsultation/{consultation_id}', 'ConsultationController@showSingleConsultation');
Route::get('getPrescription/{patient_id}', 'PrescriptionController@show');
Route::get('getUser/{user_id}', 'UserController@show');
Route::get('getPatient/{patient_id}', 'PatientController@show');
Route::get('getDoctor/{doctor_id}', 'DoctorController@show');


//Route::post('/addParty', 'UserController@store');
//Route::post('/transaction', 'TransactionController@create');
