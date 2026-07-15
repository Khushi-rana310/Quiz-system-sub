<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Main\landingpage;

Route::get('/', [landingpage::class,'index']);

// Route::view('adminlogin','admin-login');
// Route::get('adminlogin',function(){
//     return view('admin-login');
// });
