<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Main\landingpage;
use App\Http\Controllers\Admin\Homepage;

Route::get('/', [landingpage::class,'index']);




Route::controller(Homepage::class)->group(function(){

Route::get('admindashboard','dashboard')->name('addash');
Route::get('admin_login','login_page');
Route::post('admin-login','log_in');
Route::get('admin_logout', 'admin_logout');

Route::get('categories','view_category');
Route::post('add_category','add_category');

Route::get('categoryshow','category_view'); 

Route::get('deletecategory/{id}','category_delte')->name('deltecat');

Route::get('addquiz','addquiz');

Route::post('add_mcq','addmcq');

Route::get('show_quiz_question/{id}/{name}','showquizqtn')->name('showquestion');

Route::get('quiz_list/{id}/{name}','quiz_list')->name('quizlist');


});


