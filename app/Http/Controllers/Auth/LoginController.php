<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\facades\Auth;



class LoginController extends Controller
{
    public function login(Request $request, Redirector $redirect)
    {

        $remember = $request->filled('remember');

        if (Auth::attempt($request->only('email', 'password'), $remember)){
            $request->session()->regenerate();
            return $redirect->intended('dashboard');
        }

        return redirect('login');
    }

    public function logout(Redirector $redirect, Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();
        
        return $redirect->to('login');
    }
}
