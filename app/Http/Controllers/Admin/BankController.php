<?php

namespace App\Http\Controllers\Admin;

use App\Models\Bank;
use function GuzzleHttp\Promise\all;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BankController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showBank()
    {
        $user = auth()->user();
        return view('admin.banks' ,compact('user'));
    }

    public function bankStore(Request $request)
    {
        try{
            $user = auth()->user();

            $user->bank_name = $request->bank_name;
            $user->account_number = $request->account_number;
            $user->save();

            session()->flash('app_message', 'You bank account added successfully.');

            return redirect()->back();

        } catch (\Exception $ex) {
            session()->flash('app_error', $ex->getMessage());
            return back();
        }

    }




}
