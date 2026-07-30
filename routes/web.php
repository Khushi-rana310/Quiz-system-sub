<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Main\landingpage;
use App\Http\Controllers\Admin\Homepage;
use App\Http\Controllers\User\LoginController;
use App\Http\Controllers\User\Dashboard;

Route::get('/', [landingpage::class,'index']);

Route::controller(Homepage::class)->group(function(){

Route::get('admindashboard','dashboard')->name('addash');
Route::get('admin_login','login_page');
Route::post('admin-login','log_in');
Route::get('admin_logout', 'admin_logout');

Route::get('categories','view_category')->name('create_cat_view');
Route::post('add_category','add_category');

Route::get('categoryshow','category_view')->name('view_category'); 

Route::get('deletecategory/{id}','category_delte')->name('deltecat');

Route::get('addquiz','addquiz');

Route::post('add_mcq','addmcq');

Route::get('show_quiz_question/{id}/{name}','showquizqtn')->name('showquestion');

Route::get('quiz_list/{id}/{name}','quiz_list')->name('quizlist');


});

//user Login
Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login', [LoginController::class, 'login'])->name('login.submit');
Route::get('dashboard', [LoginController::class, 'dashboard'])->name('user.dashboard');

Route::get('userlogout',[LoginController::class,'logout'])->name('user_logout');
Route::get('userform',[LoginController::class,'logout'])->name('user_logout');
Route::get('userQuizlist/{id}/{name}',[Dashboard::class,'QuizList'])->name('UserQuizlist');
Route::get('mcqs/{quizid}/{quizname}/{cat_name}',[Dashboard::class,'mcq_questions'])->name('mcqs');

Route::post('submitmcq/{qid}',[Dashboard::class,'mcq_submit'])->name('Submitmcqs');



//User Registration
Route::get('/register', [LoginController::class, 'Register'])->name('register');
Route::post('/register', [LoginController::class, 'Register'])->name('register.submit');
