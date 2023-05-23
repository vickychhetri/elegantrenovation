<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
// use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Alert;
class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->user = Auth::guard('admin')->user();
            return $next($request);
        });
    }

    public function login()
    {
        return view('admin.auth.login');
    }

    public function doLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|exists:admin_logins',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (!Auth::guard('admin')->attempt($credentials)) {
            return redirect()->route('admin.login')->with('error', 'Oppes! You have entered invalid credentials');
        }

        Session::put('user', Auth::guard('admin')->user());
        // toast('You have logged in successfully!', 'success');
        Alert::success('Congrats', 'You\'ve Successfully Registered');
        Alert::toast('You\'ve Successfully Registered', 'success');
        return redirect()->intended('admin/dashboard');
    }

    public function logout(Request $request)
    {
        Session::flush();
        Auth::logout();

        return redirect()->route('admin.login');
    }
}
