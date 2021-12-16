<?php

namespace Modules\User\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Modules\User\Http\Requests\RegisterRequest;
use Modules\User\Models\User;

class RegisterController extends Controller
{
    
    public function signupView()
    {
        return view('user::auth.signup');
    }
      

    public function signup(RegisterRequest $request)
    {             
        User::create($request->validated());
        return redirect()->route('home')->with('success','You have signed-in');
    }


}
