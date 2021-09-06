<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

class LogoutController extends Controller
{
    public function Logout() {
        auth()->logout();

        return redirect()->route('homepage');
    }
}
