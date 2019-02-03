<?php

namespace App\Http\Controllers\Auth ;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
class AdminLoginController extends Controller
{
   
    public function __construct(){
        $this->middleware('guest:admin');
    }
    public function showLoginForm(){
        return view('auth.admin-login');

    }
    public function login(Request $request){
    // return true;
    //    validate the form data
   // dd($request);
    $this->validate($request,[
        'email' =>'required|email',
        'password' =>'required|min:6',
    ]);
    //dd($credentials);
    //    Attempt to log the user in
    if(Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)){
 // if successful, then redirect to thier intend location
    return redirect()->intended(route('admin.dashboard'));

    }
   // if unsuccessful , then redirect to back to the login with the login form
    return redirect()->back()->withInput($request->only('email','remember'));
  // return"false dvfdfv";;
        
    }
}
