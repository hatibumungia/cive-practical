<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('isAdmin', ['except' => ['index', 'allUser']]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.home');
    }

    public function allUser()
    {
    	$users = User::orderBy('name')->paginate(10);
    	$usersCount = User::count();
    	return view('dashboard.users.index', compact('users', 'usersCount'));
    }
    public function showUser(User $user)
    {
    	$user = User::findOrFail($user->id);
    	return view('dashboard.users.show', compact('user'));
    }

    public function isAdmin(Request $request, User $user)
    {
        $user = User::findOrFail($user->id);
        if($user->is_admin == false){
            $user->is_admin = true;
            $user->updated_at = Carbon::now();
            $user->save();
            $request->session()->flash('msg-success', 'user has maked administrator successfully.');
            return back();
        }else{
            $user->is_admin = false;
            $user->updated_at = Carbon::now();
            $user->save();
            $request->session()->flash('msg-success', 'user has maked normal user successfully.');
            return back();
        }
    }
}
