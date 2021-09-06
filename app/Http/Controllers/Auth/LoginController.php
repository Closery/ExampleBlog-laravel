<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller 
{
    public function __construct()
    {
        $this->middleware(['guest']);
    }
    
    public function Index() {
        return view('auth.login');
    }

    public function Login(Request $request) {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        auth()->attempt($request->only('email', 'password'));

        return redirect()->route('homepage');
    }
}
