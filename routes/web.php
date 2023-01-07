<?php

use App\Http\Controllers\LoginController;
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

    Route::group(['middleware'=>'role:perawat,admin'],function(){
        
        Route::get('/admin',function(){
            return "admin";
        });
        
    });
});

