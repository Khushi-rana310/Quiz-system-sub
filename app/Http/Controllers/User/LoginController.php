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

    public function login(Request $request){
            // Validate the request
            $request->validate([
                'username' => 'required',
                'password' => 'required|min:6',
            ]);

            // Check if the user exists
            $user = Usermodel::where('username', $request->username)
                            ->where('password', $request->password)
                            ->first();

            if ($user) {
                // Store user data in session
                Session::put('users', $user);

                // Redirect to dashboard
                return redirect()->route('user.dashboard');
            }

            // Invalid credentials
            return back()->withErrors([
                'login' => 'Invalid username or password.'
            ])->withInput();
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
