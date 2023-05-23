<?php

namespace App\Http\Middleware;

use App\Models\Permission;
use App\Models\UserRole;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class EnsurePermission
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next,$permission_level)
    {
        #check if admin than request process further : no need to check permission
        if(Auth::guard('admin')->user()->role == UserRole::Admin){
            return $next($request);
        }
       #if staff than check permission
        else if(Auth::guard('admin')->user()->role == UserRole::Staff){
            $permission = Permission::where('permission', $permission_level)->first();
            $user_role = UserRole::where(['user_id'=> Auth::guard('admin')->user()->id, 'permission_id' =>  $permission->id])->first();
            if($user_role){
                return $next($request);
            }else{
                 return  redirect('/admin/access-denied');
            }
        }
    }
}
