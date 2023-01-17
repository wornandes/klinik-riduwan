<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\UserController;
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
        Route::post('/user/delete',[UserController::class, 'destroyUser']);
        Route::get('/user/{id}/edit',[UserController::class, 'editUser']);
        Route::post('/user/{id}/update',[UserController::class, 'updateUser']);
        
    });

    Route::group(['middleware'=>'role:perawat'],function(){
        
        Route::get('/patient',[PatientController::class, 'index']);
        Route::get('/patient/add',[PatientController::class, 'addPatient']);
        Route::post('/patient/store',[PatientController::class, 'storePatient']);
        Route::get('/patient/{id}/edit',[PatientController::class, 'editPatient']);
        Route::get('/patient/{id}/detail',[PatientController::class, 'showDetailPatient']);
    });
});

