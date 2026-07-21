<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use App\Models\Admin\Adminmodel;

class Homepage extends Controller
{
    public function login_page(){
        return view('admin/login');
    }

    public function login(Request $request){
        
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
        return view('admin/dashboard',compact('admin_data'));
    }
}
