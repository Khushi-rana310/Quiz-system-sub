<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use App\Models\User\Usermodel;

class Homepage extends Controller
{
    public function login_page(){
        return view('user/login');
    }

    public function login(Request $request){
        
        $validation = $request->validate([
            'username'=>'required',
            'password'=>'required|min:6',
        ]);

        $user = Usermodel::where([
            ['username','=',$request->username],
            ['password','=',$request->password]
        ])->first();

        // if($user){
        // Session::put('user',$user);  
        // return redirect()->route('userdash');    
        // }else{
        //  $validation = $request->validate([
        //      "user"=>"required",
        //  ],[
        //     "user.required"=>"User dosen't exist"
        //  ]
         
        //  );  
        // }
    }

    // public function dashboard(){
    //     $user_data =  Session::get('user');
    //     return view('user/dashboard',compact('user_data'));
    // }
}
