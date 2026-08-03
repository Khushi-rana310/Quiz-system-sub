<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\User\Usermodel;
use App\Models\Admin\Catergory;

use App\Models\Admin\QuizModel;
use Illuminate\Support\Facades\Mail;
use App\Mail\verifyUser;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;
///+vQ&tjTL8yeTPg
class LoginController extends Controller
{
    
    public function index() {
        return view('user/login');
    }

    public function login(Request $request)

{
    // Validate the request
    $request->validate([
        'email' => 'required|email',
        'password' => 'required|min:6',
    ]);

    // Check if the user exists
$user = Usermodel::where('email', $request->email)->first();

if ($user && Hash::check($request->password, $user->password)) {
  


    // $link=crypt::encryptString($user->email);
    // $link = url('/verify-email?token=' . $link);
    // Mail::to($user->email)->send(new verifyUser($link));
                      
    if ($user) {
        // Store user data in session
        Session::put('users', $user);

        // Redirect to dashboard
        $username = $user->name;
        //  return redirect()->route('user.dashboard',compact('username'));
         return redirect('dashboard');
    }

    // Invalid credentials
    return back()->withErrors([
        'login' => 'Invalid email or password.'
    ])->withInput();
}
}    

     public function Register(Request $request)
    {
        // Validate the request
        $request->validate([
            'name' => 'required|min:3|max:50',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed',
        ]);
  
        // Create a new user
        $user = new Usermodel();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password); // Hash the password
        $user->is_verified=0;
        $user->save();  
       
        $link=crypt::encryptString($user->email);
        $link = url('/verify-email?token=' . $link);
        Mail::to($user->email)->send(new verifyUser($link));
        return redirect('/')->with('verification_alert', 'Please verify your email before logging in.');


    //    if($user->is_verified==0){
        // $user->save();
    //     return redirect()->route('login')->with('success', '. Please verify your email before logging in.');
    //    }
    //    else{
    
    
    //     return redirect()->route('login')->with('success', 'Registration successful. Please log in.');
    //    }
        
      
        // Redirect to login page with success message
        // return redirect()->route('login')->with('success', 'Registration successful. Please log in.');
    }

    function verifyUser(){

     $userRecord= Usermodel::where('email',Crypt::decryptString(request()->token))->first();  
     if($userRecord){
        $userRecord->is_verified=1;
        $userRecord->update();
        return redirect('login')->with('success', 'Email verified successfully. Please log in.');
    }
    else{
        return redirect('login')->with('error', 'Invalid verification link.');
    }
    }
    
    //
    public function dashboard(){

        if(Session::has('users')){
            $userdetail = Session::get('users');
            $categories = Catergory::withCount('quizs')->get();
            if($userdetail->is_verified==0){
                return redirect('/')->with('verification_alert', 'Please verify your email before logging in.');
            }else{
                return view('user.dashboard',compact('categories','userdetail'));
            }
            // return view('user.dashboard',compact('categories','userdetail'));
        }else{
           return redirect('login');  
        }
    }
    

    // public function dashboard(){
    //     if(Session::has('users')){
    //         $categories = Catergory::withCount('quizs')->get();
    //        return view('user/dashboard',compact('categories'));
    //     }else{
    //        return redirect('login');  
    //     }
    // }

    public function logout(){
        if(Session::has('users')){
           Session::forget('users');
           return redirect('login');
        }
    }

    // public function searchQuiz(Request $request, $cat_name){
    //     $request->validate([
    //         'search' => 'required|string|max:200',
    //     ]);
      
    //     $Quizdata = QuizModel::where('name', 'like', '%' . $request->search . '%')->get();
       
    //     return view('user/quiztable', compact('Quizdata','cat_name'));
    // }

    
}
