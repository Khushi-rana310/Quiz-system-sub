<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use App\Models\Admin\Catergory;
use App\Models\Admin\QuizModel;
use App\Models\Admin\McqModal;
use App\Models\User\UserquizModel;
use App\Models\User\Mcqrecord;
use Carbon\Carbon;
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
   $user_id = Session::get('users')->id;
   // $userdata = UserquizModel::where([['quiz_id', '=', $quizid],['user_id', '=', $user_id]])->first();
  
   $record_insert = new UserquizModel();
   $record_insert->user_id = $user_id;
   $record_insert->quiz_id = $quizid;
   $record_insert->status = 1;
   $record_insert->created_at = now();
   $record_insert->save();

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
         $currentquiz['record_id'] = $record_insert->id;
        
         Session::put('currenQuiz',$currentquiz);
         return view('user.mcqs',compact('categories','mcq_detail','userdetail'));



     
   
  }


  public function mcq_submit(Request $request , $id){
$userdetail = Session::get('users');
 $categories = Catergory::withCount('quizs')->get(); 
 $currentquiz =  Session::get('currenQuiz');
 $currentquiz['currentMCq'] += 1;
 $mcq_detail = McqModal::where([['id', '>', $id],['quiz_id', '=', $currentquiz['quiz_id']]])->first();
 Session::put('currenQuiz',$currentquiz);

 
 $isexist = Mcqrecord::where([['mcq_id', '=', $request->mcq_id],['record_id', '=', $currentquiz['record_id']]])->count();
 
   if($isexist < 1){
      $mcq_record = new Mcqrecord();
      $mcq_record->record_id = $currentquiz['record_id'];
      $mcq_record->user_id = Session::get('users')->id;
      $mcq_record->mcq_id = $request->mcq_id;
      
      if($request->option == McqModal::find($request->mcq_id)->correct_ans){
         $mcq_record->is_corrrect = 1;
      }else{
         $mcq_record->is_corrrect = 0;
      }
      $mcq_record->selected_ans  = $request->option;
      
      $mcq_record->created_at = now();
      $mcq_record->save();


      if($mcq_detail){ 
         return view('user.mcqs',compact('categories','mcq_detail','userdetail'));
      }else{
         $record_data = Mcqrecord::withmcqquestion()->where('record_id',$currentquiz['record_id'])->get();
         $corect_count = Mcqrecord::where([
            ['record_id','=',$currentquiz['record_id']],['is_corrrect','=','1']
            ])->count();
            $record_update = UserquizModel::find($currentquiz['record_id']);
            $record_update->status = 2;
            $record_update->save();
         return view('user.mcqresult',compact('categories','record_data','corect_count','userdetail'));
         // return "result page";
      }
   }
  }  


 public function quiz_details(){
   $categories = Catergory::withCount('quizs')->get();
   $user_id = Session::get('users')->id;
    $userdetail = Session::get('users');
   $record_data = UserquizModel::Withgetquiz()->where('user_id',$user_id)->get();
   return view('user.quizhistory',compact('categories','record_data','userdetail'));

}
}



