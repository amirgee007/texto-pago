<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function showMyAccount()
    {
        $user = auth()->user();

        return view('admin.my-account' ,compact('user'));
    }

    public function updateMyAccount(Request $request){

        try{

            $data = $request->except('_token' ,'profile_pic');
            $user = User::find($request->id);

            if ($file = $request->file('profile_pic')) {

                $fileName = $file->getClientOriginalName();
                $extension = $file->getClientOriginalExtension() ? : 'png';
                $folderName = '/uploads/user_images/';
                $destinationPath = public_path() . $folderName;
                $safeName = str_random(10) . '.' . $extension;
                $file->move($destinationPath, $safeName);
                $data['profile_pic'] = $safeName;
            }

            $is_updated = ($user->update($data));

            if($is_updated)
                session()->flash('app_message', 'Account info has been successfully updated');
            else
                session()->flash('app_error', 'Account info has not been successfully updated');

            return back();


        } catch (\Exception $ex) {
            session()->flash('app_error', $ex->getMessage());
            return back();
        }



    }


}
