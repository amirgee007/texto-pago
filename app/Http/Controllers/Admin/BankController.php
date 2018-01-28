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

    public function showbanks()
    {

        $banks = Bank::where('user_id' ,auth()->id())->get();
        return view('admin.banks' ,compact('banks'));
    }

    public function bankStore(Request $request)
    {
        try{
            $data = $request->except('_token');
            $data['user_id']= auth()->id();

            $bank = Bank::create($data);

            session()->flash('app_message', 'You bank added successfully!.');

            return redirect()->back();

        } catch (\Exception $ex) {
            session()->flash('app_error', $ex->getMessage());
            return back();
        }

    }




}
