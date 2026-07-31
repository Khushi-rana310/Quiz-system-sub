<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\User\Usermodel;
use App\Models\Admin\Catergory;


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
    $user = Usermodel::where('email', $request->email)
                     ->where('password', $request->password)
                     ->first();

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
        $user->save();
      
        // Redirect to login page with success message
        return redirect()->route('login')->with('success', 'Registration successful. Please log in.');
    }

    public function dashboard(){
        if(Session::has('users')){
            $categories = Catergory::withCount('quizs')->get();
           return view('user/dashboard',compact('categories'));
        }else{
           return redirect('login');  
        }
    }

    public function logout(){
        if(Session::has('users')){
           Session::forget('users');
           return redirect('login');
        }
    }
}
