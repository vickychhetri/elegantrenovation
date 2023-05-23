<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\AdminLogin;
use App\Models\Country;
use App\Models\Permission;
use App\Models\Role;
use App\Models\UserRole;
use App\Traits\ImageUploadTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class StaffController extends Controller
{
    use ImageUploadTrait;
     public function index(Request $request){
         $records=AdminLogin::where('role',Role::Staff)->orderBy('id','DESC');
         if(isset($request->search)){
             $records=$records->where('name','LIKE',"%{$request->search}%")
             ->orWhere('email','LIKE',"%{$request->search}%");
         }
         $records=$records->paginate(10);
         $Sr=$records->perPage() * ($records->currentPage() - 1)+1;
         return view("admin.staff.stafflisting",compact('records','Sr'));
     }
    public function create(Request $request){
        $permissions=Permission::get();
        $country_codes = Country::select('phonecode','name')->where('phonecode','!=',0)->get();
        return view("admin.staff.staffadd",compact('permissions','country_codes'));
    }
    public function store(Request $request){

        $request->validate([
            'name' => 'nullable',
            'email' => 'nullable|email|unique:admin_logins',
            'phone_number' => 'nullable|min:9|max:10',
            'country_code' => 'required_with:phone_number',
            'password' => 'required'
        ]);
         $record=new AdminLogin;
         $record->name=$request->name;
         $record->email=$request->email;
         $record->phone_number=$request->phone_number;
         $record->country_code=$request->country_code;
         $record->password=Hash::make($request->password);
         $image_response=$this->store_image($request);
         if(isset($image_response['image'])){
             $record->image=$image_response['image'];
         }
         $record->role="Staff";
         $isSaved=$record->save();
         if($isSaved){
             foreach ($request->permission as $p){
                 $permission_data=[
                     'role_id'=>Role::getStaffID(),
                     'permission_id'=>$p,
                     'user_id'=>$record->id
                 ];
                 UserRole::updateOrCreate($permission_data,$permission_data);
             }
         }

         return redirect(route('admin.staff_listing'));
     }


     public function show($id){
            $record=AdminLogin::find($id);
            if(!isset($record)){
                abort(404);
            }
            $permission_ids=UserRole::where('user_id',$id)->pluck('permission_id')->toArray();
            $permissions=Permission::whereIn('id',$permission_ids)->get();
            return view("admin.staff.staffview",compact('record','permissions'));
     }

    public function edit($id){
        $record=AdminLogin::find($id);
        if(!isset($record)){
            abort(404);
        }
        $country_codes = Country::select('phonecode','name')->where('phonecode','!=',0)->get();
        $all_permission=Permission::get();

        foreach ($all_permission as $permi){
            $permi["granted"]=UserRole::where('user_id',$id)->where('permission_id',$permi->id)->exists();
        }
        return view("admin.staff.staffedit",compact('record','all_permission','country_codes'));
    }

    public function update(Request $request){

        $request->validate([
            'user_id'=>'required',
            'name' => 'nullable',
            'email' => '    email',
            'phone_number' => 'nullable|min:9|max:10',
            'country_code' => 'required_with:phone_number',
        ]);
        $record= AdminLogin::find($request->user_id);
        if(isset($record)){
            $record->name=$request->name;
            $record->email=$request->email;
            $record->phone_number=$request->phone_number;
            $record->country_code=$request->country_code;

            if(isset($record->password)){
                $record->password=Hash::make($request->password);
            }

            if(isset($request->image)){
                $image_response=$this->store_image($request);

                if(isset($image_response['image'])){
                    $record->image=$image_response['image'];
                }
            }

            $isSaved=$record->save();

            if($isSaved){
                UserRole::where('user_id',$record->id)->delete();
                if(isset($request->permission))
                foreach ($request->permission as $p){
                    $permission_data=[
                        'role_id'=>Role::getStaffID(),
                        'permission_id'=>$p,
                        'user_id'=>$record->id
                    ];
                    UserRole::updateOrCreate($permission_data,$permission_data);
                }
            }

        }


        return redirect()->back()->with('success',"Updated successfully");
    }


    public  function block_unblock($id){
        $user=AdminLogin::find($id);
        if(!$user){
           abort(404);
        }

        $user->blocked=$user->blocked?false:true;
        $user->save();
        return redirect()->back()->with('success',"Blocked successfully");
    }
    public  function destroy($id){
        $user=AdminLogin::find($id);
        if(!$user){
            abort(404);
        }

        $user->delete();
        return redirect(route('admin.staff_listing'));
    }
}
