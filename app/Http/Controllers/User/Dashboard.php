<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use App\Models\Admin\Catergory;
use App\Models\Admin\QuizModel;
use App\Models\Admin\McqModal;

class Dashboard extends Controller
{
  public function QuizList($id,$cat_name){
     
     if(Session::has('users')){
            $userdetail = Session::get('users');
            $categories = Catergory::withCount('quizs')->get();
            $get_quizes = QuizModel::where('category_id',$id)->get();
           return view('user.quiztable',compact('categories','get_quizes','cat_name','userdetail'));
        }else{
           return redirect('login');   
        }
  }
  
  
  public function mcq_questions($quizid,$quizname,$cat_name){
   $userdetail = Session::get('users');
   $categories = Catergory::withCount('quizs')->get();
   $first_mcq_id = McqModal::where('quiz_id',$quizid)->first('id');
   $mcq_detail = McqModal::where('id',$first_mcq_id->id)->first();
   
   //  return $count;
   $currentquiz = [];
   $currentquiz['total_mcq'] = McqModal::where('quiz_id',$quizid)->count();
   $currentquiz['currentMCq'] = 1;
   $currentquiz['quiz_name'] = $quizname;
   $currentquiz['quiz_id'] = $quizid;
   $currentquiz['quiz_category'] = $cat_name;
   Session::put('currenQuiz',$currentquiz);
   return view('user.mcqs',compact('categories','mcq_detail','userdetail'));
  }


public function mcq_submit($id){
 $userdetail = Session::get('users');
 $categories = Catergory::withCount('quizs')->get(); 
 $currentquiz =  Session::get('currenQuiz');
 $currentquiz['currentMCq'] += 1;
 $mcq_detail = McqModal::where([['id', '>', $id],['quiz_id', '=', $currentquiz['quiz_id']]])->first();
 Session::put('currenQuiz',$currentquiz);
if($mcq_detail){ 
    return view('user.mcqs',compact('categories','mcq_detail','userdetail'));
}else{
   return "result page
   ";
}

}

}



