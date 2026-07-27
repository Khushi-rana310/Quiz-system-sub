<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Main\landingpage;
use App\Http\Controllers\Admin\Homepage;
use App\Http\Controllers\User\LoginController;

Route::get('/', [landingpage::class,'index']);


Route::get('admindashboard',[Homepage::class,'dashboard'])->name('addash');

Route::get('admin-login',[Homepage::class,'login_page']);
Route::post('admin-login',[Homepage::class,'login']);


//user Login
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');
Route::get('/dashboard', [LoginController::class, 'dashboard'])->name('user.dashboard');

