<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;


class SettingsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function updatePhone()
    {
        $user = auth()->user();
        return view('admin.update-phone' ,compact('user'));
    }

    public function updatePin()
    {
        $user = auth()->user();
        return view('admin.update-pin',compact('user'));
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'pin' => 'required|integer|min:4|confirmed',
        ]);
    }
    public function updatePinStore(Request $request){

        try{
            $data = $request->except('_token');
            $user = auth()->user();
            $this->validator($request->except('_token'))->validate();

            $user = $user->update($data);

            session()->flash('app_message', 'User Pin updated successfully!.');

            return redirect()->back();

        } catch (\Exception $ex) {
            session()->flash('app_error', $ex->getMessage());
            return back();
        }
    }

    public function updatePhoneStore(Request $request){

        try{
            $data = $request->except('_token');
            $user = auth()->user();

            $user = $user->update($data);

            session()->flash('app_message', 'User Phone updated successfully!.');

            return redirect()->back();

        } catch (\Exception $ex) {
            session()->flash('app_error', $ex->getMessage());
            return back();
        }

    }
    
    public function showHelp()
    {
        return view('admin.help');
    }


}
