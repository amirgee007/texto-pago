<?php

namespace App\Http\Controllers\Admin;

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
        return view('admin.my-account');
    }

    public function updateMyAccount(Request $request){

        try{
            $data = $request->except('_token');
            $data['payee_user_id'] = $data['user_id']= auth()->id();

            $transaction = BankTransaction::create($data);

            session()->flash('app_message', 'You sent funds successfully!.');

            return redirect()->back();

        } catch (\Exception $ex) {
            session()->flash('app_error', $ex->getMessage());
            return back();
        }



    }


}
