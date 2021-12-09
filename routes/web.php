<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\RegisterPassengerController;
use App\Http\Controllers\Auth\RegisterDriverController;
use App\Http\Controllers\PassengerHomeController;


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
Route::get('/registerpassenger',[RegisterPassengerController::class,'index'])  ->name('registerpassenger');
Route::post('/registerpassenger',[RegisterPassengerController::class,'store']);

Route::get('/homepassenger',[PassengerHomeController::class,'index'])  ->name('homepassenger');
Route::post('/homepassenger',[PassengerHomeController::class,'store']);

Route::get('/registerdriver',[RegisterDriverController::class,'index'])  ->name('registerdriver');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);



Route::get('/register',[RegisterController::class,'index'])  ->name('register');





Route::get('/waslni', function () {
    return view('auth.login');

});
