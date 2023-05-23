<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\AdminLogin;
use App\Models\Country;
use App\Traits\ImageUploadTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ProfileController extends Controller
{
    use ImageUploadTrait;
    public function profile(){
        $user = AdminLogin::find(Session::get('user')->id)->first();
        $country_codes = Country::select('phonecode')->get();
        return view('admin.auth.editprofile', compact('user','country_codes'));
    }

    public function updateProfile(Request $request){

        $request->validate([
            'name' => 'nullable',
            'email' => 'nullable|email',
            'phone_number' => 'nullable|min:9|max:10',
            'country_code' => 'required_with:phone_number'
        ]);

        $profile = AdminLogin::find($request->id);


        $input=array();
        $input=[
            'name' => $request->name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'country_code' => $request->country_code,
        ];
        if(isset($request->image)){
            $image_response=$this->store_image($request);
            if(isset($image_response['image'])){
                $input['image']=$image_response['image'];
            }
        }
        AdminLogin::find((int)$request->id)->update($input);
        Session::put('user', Auth::guard('admin')->user());
       return redirect()->route('admin.profile')->with('success', 'Profile successfully updated');
    }
}
