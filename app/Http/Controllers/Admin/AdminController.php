<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    function __construct()
    {
        $this->middleware('auth')->only('showLoginForm');
    }

    public function showLoginForm( ){
        return redirect()->route('index.dashboard');
    }

    public function logout(Request $request){

        Auth::logout();
        $request->session()->invalidate();
        return redirect('/login');

    }


    public function showHome()
    {
        $current_user = auth()->user();
        $avail_funds =  $current_user->avail_funds;

        $users =  User::where('id','<>',$current_user->id)->get();
        return view('admin.dashboard' ,compact('users','avail_funds'));
    }

}
