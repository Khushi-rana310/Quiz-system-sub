<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Main\landingpage;
use App\Http\Controllers\Admin\Homepage;

Route::get('/', [landingpage::class,'index']);


Route::get('admindashboard',[Homepage::class,'dashboard'])->name('addash');

Route::get('admin_login',[Homepage::class,'login_page']);
Route::post('admin-login',[Homepage::class,'login']);


