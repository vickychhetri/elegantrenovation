<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\AdminLogin;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->search;
        $users = User::Search($request)->paginate(10);
        return view('admin.user.userlisting', compact('users','search'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::find($id);
        return view('admin.user.userdetail', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::find($id);

        $user->delete();

        return redirect()->route('admin.user.index')->with('success', 'User successfully deleted');
    }

    public function userBlock(Request $request){
        $user = User::find($request->id);
        if($user){
            ($user->is_block == null) ?
            $user->update([
                'is_block' => 1 ,
            ]) :
            $user->update([
                'is_block' => null ,
            ]);
            $text = ($user->is_block == null) ? 'unblocked' : 'blocked';
            return redirect()->back()->with('success', 'User'. $text);
        }
    }

    public function userDective(Request $request){
        $user = User::find($request->id);
        if($user){
            ($user->is_deactive == null) ?
            $user->update([
                'is_deactive' => 1 ,
            ]) :
            $user->update([
                'is_deactive' => null ,
            ]);
            $text = ($user->is_deactive == null) ? 'deactivated' : 'activated';
            return redirect()->back()->with('success', 'User'. $text);
        }
    }
}
