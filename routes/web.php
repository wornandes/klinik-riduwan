<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\MedicalRecordController;
use Illuminate\Support\Facades\Route;

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


Route::group(['middleware' => 'guest'], function () {
    Route::get('/login',[LoginController::class, 'index'])->name('login');
    Route::post('/login',[LoginController::class, 'authenticate']);
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/logout',[LoginController::class, 'logout']);
    Route::get('/', function () {
        return view('welcome', [
            "title" => "Home",
            'active' => 'home'
        ]);
    });

    Route::group(['middleware'=>'role:admin'],function(){
        
        Route::get('/user',[UserController::class, 'index']);
        Route::get('/user/add',[UserController::class, 'addUser']);
        Route::post('/user/store',[UserController::class, 'storeUser']);
        Route::get('/user/{id}',[UserController::class, 'destroyUser']);
        Route::get('/user/{id}/edit',[UserController::class, 'editUser']);
        Route::post('/user/{id}/update',[UserController::class, 'updateUser']);
        
    });

    Route::group(['middleware'=>'role:perawat'],function(){
        
        Route::get('/patient',[PatientController::class, 'index']);
        Route::get('/patient/search',[PatientController::class, 'search']);
        Route::get('/registration',[RegistrationController::class, 'index']);
        Route::get('/patient/add',[PatientController::class, 'addPatient']);
        Route::get('/registration/{id}/add',[RegistrationController::class, 'addRegistration']);
        Route::post('/registration/store',[RegistrationController::class, 'storeRegistration']);
        Route::get('/registration/{id}',[RegistrationController::class, 'destroyRegistration']);
        Route::get('/patient/{id}',[PatientController::class, 'destroyPatient']);
        Route::post('/patient/store',[PatientController::class, 'storePatient']);
        Route::post('/user/{id}/update',[PatientController::class, 'updatePatient']);
        Route::get('/patient/{id}/edit',[PatientController::class, 'editPatient']);
        Route::get('/patient/{id}/detail',[PatientController::class, 'showDetailPatient']);

    });

    Route::group(['middleware'=>'role:dokter'],function(){
        
        Route::get('/medical_record',[MedicalRecordController::class, 'index']);
        Route::get('/medical_record/search',[MedicalRecordController::class, 'search']);
        Route::get('/medical_record/add1',[MedicalRecordController::class, 'addPatientView']);
        Route::get('/medical_record/{id}',[MedicalRecordController::class, 'destroyMedicalRecord']);
        Route::get('/medical_record/{id}/add',[MedicalRecordController::class, 'addMedicalRecord']);
        Route::post('/medical_record/store',[MedicalRecordController::class, 'storeMedicalRecord']);
        Route::post('/medical_record/{id}/update',[MedicalRecordController::class, 'updateMedicalRecord']);
        Route::get('/medical_record/{id}/edit',[MedicalRecordController::class, 'editMedicalRecord']);
        Route::get('/medical_record/{id}/detail',[MedicalRecordController::class, 'showDetailMedicalRecord']);
    });

});

