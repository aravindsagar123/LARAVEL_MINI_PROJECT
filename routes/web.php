<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DbController;
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

Route::get('/',[HomeController::class,'index1'])->name('index1');
Route::get('/login',[HomeController::class,'login'])->name('login');
Route::get('/register',[HomeController::class,'register'])->name('register');
Route::post('/log',[LoginController::class,'log'])->name('log');
Route::get('/adminhome',[HomeController::class,'adminhome'])->name('adminhome');
Route::get('/staff',[HomeController::class,'staff'])->name('staff');
Route::post('/staffregi',[LoginController::class,'staffregi'])->name('staffregi');
Route::get('/doctor',[HomeController::class,'doctor'])->name('doctor');
Route::post('/doctor_reg',[LoginController::class,'doctor_reg'])->name('doctor_reg');
Route::get('/view',[HomeController::class,'view'])->name('view');
Route::get('/edit/{id}',[DbController::class,'edit'])->name('edit');
Route::post('update/{id}',[DbController::class,'update'])->name('update');
Route::get('/delete/{id}',[DbController::class,'delete'])->name('delete');
Route::get('/staffhome',[HomeController::class,'staffhome'])->name('staffhome');
Route::get('/stafflogin',[HomeController::class,'stafflogin'])->name('stafflogin');
Route::post('/stafflog',[LoginController::class,'stafflog'])->name('stafflog');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');
Route::get('/staffview',[HomeController::class,'staffview'])->name('staffview');
Route::get('/editstaff/{id}',[DbController::class,'editstaff'])->name('editstaff');
Route::post('/updatestaff/{id}',[DbController::class,'updatestaff'])->name('updatestaff');