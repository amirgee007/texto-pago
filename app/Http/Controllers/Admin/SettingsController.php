<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function updatePhone()
    {
        return view('admin.update-phone');
    }

    public function updatePin()
    {
        return view('admin.update-pin');
    }

    public function updatePinStore(Request $request){

        dd($request->all());
    }

    public function updatePhoneStore(Request $request){

        dd($request->all());

    }
    
    public function showHelp()
    {
        return view('admin.help');
    }


}
