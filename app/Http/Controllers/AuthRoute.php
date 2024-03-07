<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthRoute extends Controller
{
   public function Home(){
     if(!Auth::check()){
       return view('welcome', ["title"=>"Welcome!"]);
     }
   }
    public function register()
    {
        return view('register', ["title" => "User Registration"]);
    }

    public function login()
    {
        return view('login', ["title" => "User Login"]);
    }

    public function reset()
    {
        return view('forgot-password', ["title" => "Reset Password"]);
    }

    public function doRegister(Request $request)
    {
     $validator = $request->validate([
        'username' => 'required|string|max:26',
        'pass' => 'required|string|max:32',
        'keys' => 'required|numeric|digits_between:4,8',
    ]);
    Session::flash('message',"Success! Go Signin Now!");
    return redirect('/signup');
    }

    // Example login logic
    public function doLogin(Request $request)
    {
        // Validate login credentials
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication successful
            return redirect('/dashboard');
        } else {
            // Authentication failed
            return redirect('/login')->with('error', 'Invalid login credentials');
        }
    }
   public function logout(){
     //session auth end
   }
    // Example password reset logic
    public function doReset(Request $request)
    {
        // Handle password reset logic
        // ...

        // Redirect to login page after resetting password
        return redirect('/login')->with('message', 'Password reset successful. Please log in.');
    }
}