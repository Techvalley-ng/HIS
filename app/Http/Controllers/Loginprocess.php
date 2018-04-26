<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//from laravel auth system
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class Loginprocess extends Controller
{
      /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */
    use AuthenticatesUsers;
    
    //the login form dispaly the login form
    public function LoginHome(){
        $notlogin = "wali is in abuja";
        return view('login.form')->with('whereisuser', $notlogin);
    }
    
    public function LoginAuth(Request $logindata){
        $this->validate($logindata, [
            'username'  =>  'required|min:6|alpha',
            'password'  =>  'required|min:6',
            'token'     =>  'required|min:10|numeric'
        ]);
        
        return $logindata->input('username');
    }
    
    
}
