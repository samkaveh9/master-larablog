<?php

namespace Modules\User\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Modules\User\Http\Requests\LoginRequest;

class LoginController extends Controller
{
    
    public function signinView()
    {
        return view('user::auth.signin');
    }
    
    public function signin(LoginRequest $request)
    {   
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('/')
                        ->withSuccess('Signed in');
        }
  
        return redirect("signin")->withSuccess('Login details are not valid');
    }

    public function signOut() {
        Session::flush();
        Auth::logout();
  
        return redirect(route('home'));
    }

}
