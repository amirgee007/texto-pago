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
        $bank = auth()->user()->bank;
        return view('admin.banks' ,compact('bank'));
    }

    public function bankStore(Request $request)
    {
        try{

            $bank = Bank::query()->firstOrNew(['user_id'=>auth()->id()]);
            $bank->name = $request->name;
            $bank->account_number = $request->account_number;
            $bank->save();

            session()->flash('app_message', 'You bank account added successfully.');

            return redirect()->back();

        } catch (\Exception $ex) {
            session()->flash('app_error', $ex->getMessage());
            return back();
        }

    }




}
