<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\AdminLogin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class ChangePasswordController extends Controller
{
    public function changePasswordForm()
    {
        return view('admin.auth.changepassword');
    }

    public function changePassword(Request $request)
    {
        $user = Session::get('user');

        $validator = Validator::make($request->all(), [
            'old_password' => 'required',
            'new_password' => 'required|min:8|different:old_password',
            'confirmpassword' => 'required|min:8|same:new_password',
        ]);

        AdminLogin::where()->update([
            'password' => Hash::make($request->new_password)
        ]);
        return redirect()->back()->with('success', 'password chnaged successfully');
    }
}
