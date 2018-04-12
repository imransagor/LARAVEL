<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Registration;
use Session;
use DB;

class LoginController extends Controller
{
    
     public function loginPageLoad()
     {
     	return view('login');
     }
  
    public function userCheck(Request $request)
     { 
         $this->validate($request,[
              'username' => 'bail | required',
              'password'  =>  'required',
            ]);

        $user = Registration::where('username',$request->username)
        			  ->where('password',$request->password)
        			  ->first();
        if($user != null)
        {
            $request->session()->put('userName', $user->username);
        	return view('home');   
        }
        else
        {
        	Session()->flash('LogoinErrorMessage', "Username And Password does not match");
        	return redirect()->back();
        }

     }
}
