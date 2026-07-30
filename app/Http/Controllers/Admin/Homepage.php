<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

// SESSION 
use Illuminate\Support\Facades\Session;

// 
use Carbon\Carbon;

// CONTROLLER
use App\Http\Controllers\Controller;

//MODELS
use App\Models\Admin\Adminmodel;
use App\Models\Admin\Catergory;
use App\Models\Admin\QuizModel;
use App\Models\Admin\McqModal;

class Homepage extends Controller
{
    public function login_page(){
        if(Session::has('admin')){
           return redirect()->route('addash');  
        }else{
        return view('admin/login');
        }
    }

    public function log_in(Request $request){


        $validation = $request->validate([
            'username'=>'required',
            'password'=>'required|min:6',
        ]);

        $admin = Adminmodel::where([
            ['username','=',$request->username],
            ['password','=',$request->password]
        ])->first();

        if($admin){
        Session::put('admin',$admin);  
        return redirect()->route('addash');    
        }else{
         $validation = $request->validate([
             "user"=>"required",
         ],[
            "user.required"=>"User dosen't exist"
         ]
         
         );  
        }
    
    }

    public function dashboard(){
        $admin_data =  Session::get('admin');
        if($admin_data){
        return view('admin/dashboard',compact('admin_data'));
        }else{
        return redirect('admin_login');   
        }
    }

    public function admin_logout(){
        Session::forget('admin');
        return redirect('admin_login');
    }

    public function view_category(){
        $admin_data =  Session::get('admin');
        if($admin_data){
        return view('admin/category',compact('admin_data'));
        }else{
        return redirect('admin_login');   
        }
        
    }

    public function add_category(Request $request){
        $admin =  Session::get('admin');
        $currentDateTime = Carbon::now();
         $validations = $request->validate([
            "category" => 'required|min:5|unique:categories,name'
         ]);



        // Method 1 for insert data into the table

                //  $category = new Catergory();
                //  $category->name = $request->category;
                //  $category->creater_id = $admin->id;
                //  $category->creater_name = $admin->username;
                //  $category->created_at = $currentDateTime;
                //  if($category->save()){
                //     Session::flash('category','Category '.$request->category.' added succesfully');
                //     return redirect('categories');
                //  }else{
                //     Session::flash('category','Error! Category '.$request->category.' not added.'); 
                //     return redirect('categories');
                //  }




        // Method 2 for insert the data into the table
        // note:if you want to use this mehtod then you also use fillable table in your model
        // same function we can use as insert just replace the create with insert
            $response =  Catergory::create([
                'name'=>$request->category,
                'creater_id'=>$admin->id,
                'creater_name'=>$admin->username,
                'created_at'=>now()
                ]);
                if($response){
                    Session::flash("category","Category ".$request->category." added sucessfully");
                    return redirect('categories');
                }else{
                    Session::flash("category","Error !Category ".$request->category." not added"); 
                    return redirect('categories');
                }

    }

    public function category_view(){
        $category_table = Catergory::with('creator')->get();
        $admin_data = Session::get('admin');
        // return $category_table;
        return view('admin.category_view',compact('admin_data','category_table'));
    }

    public function category_delte($id){

         $isdelete = Catergory::find($id)->delete();
          if($isdelete){
            Session::flash("category","Success! Category deleted succesfully.");
            return redirect('categoryshow');
          }else{
            Session::flash("category","Error! Category not delete.");
            return redirect('categoryshow'); 
          }

    }

    public function addquiz(Request $request){
        $admin_data = Session::get('admin');
        $category_table = Catergory::get();
        $total_mcq_question = 0;
        if($admin_data){
            $quiz_name = request('quiz_name');
            $cat_id = request('category_id');

            if($quiz_name && $cat_id && !(Session::has('quizdetail'))){
               
                //   $result = QuizModel::create([
                //        'name'=>$quiz_name,
                //        'category_id'=>$cat_id,
                //        'created_at'=>now()
                //     ]);
                $request->validate([
                    'quiz_name'   => 'required|string|max:255',
                    'category_id' => 'required|integer',
                ]);              
             $quiz = new QuizModel();
             $quiz->name = $quiz_name;
             $quiz->category_id = $cat_id;
             $quiz->created_at = now();
             
             if($quiz->save()){
                    Session::put('quizdetail',$quiz);
                }
            }else{
             $quiz_data = Session::get('quizdetail');
             if($quiz_data){
             $total_mcq_question =  McqModal::where('quiz_id',$quiz_data->id)->count();
             }
            }
            

           return view('admin.add_quiz',compact('admin_data','category_table','total_mcq_question'));
        }else{
           return redirect('admin_login');   
        }
    }

    public function addmcq(Request $request){
        $mcq = new McqModal();
         
        $validation = $request->validate([
            'question'=>'required|min:10',
            'option1'=>'required',
            'option2'=>'required',
            'option3'=>'required',
            'option4'=>'required',
            'right_option'=>'required',
        ]);

        $admin = Session::get('admin');
        $quiz_details = Session::get('quizdetail');

        $mcq->question = $request->question;
        $mcq->a	= $request->option1;
        $mcq->b	= $request->option2;
        $mcq->c	= $request->option3;
        $mcq->d	= $request->option4;
        $mcq->correct_ans = $request->right_option;	

        $mcq->admin_id	= $admin->id;
        $mcq->quiz_id = $quiz_details->id;	
        $mcq->category_id = $quiz_details->category_id;	

        $mcq->created_at = now();

        if($mcq->save()){
           if($request->Submit_data == 'add_more'){ 
              return redirect(url()->previous());
           }elseif($request->Submit_data == 'submit'){
             Session::forget('quizdetail');
             return redirect('admindashboard');
           }
        }


    }

    public function showquizqtn($id,$quiz_name = null){
        
        $admin_data =  Session::get('admin');
        $quiz_data = Session::get('quizdetail');
        $cat_id  = QuizModel::where('id',$id)->first()->category_id;
        $category_name = Catergory::where('id',$cat_id)->first()->name;

        if($quiz_data){
            $quiz = $quiz_data->name;
        }else{
            $quiz = $quiz_name; 
        }
        
        if($admin_data){
         $questions = McqModal::where('quiz_id',$id)->get();            
         return view('admin.quiz_question',compact('admin_data','questions','quiz','category_name'));
        }else{
        return redirect('admin_login');   
        }

    }

    public function quiz_list($id,$category_name){
        $admin_data =  Session::get('admin');
        if($admin_data){
         $all_quizes = QuizModel::where('category_id',$id)->withCount('mcqs')->get();            
         return view('admin.category_quiz',compact('admin_data','all_quizes','category_name'));
        }else{
        return redirect('admin_login');   
        }
    }

    
}   
