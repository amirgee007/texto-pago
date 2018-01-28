<?php

namespace App\Http\Controllers\Admin;

use App\Models\BankTransaction;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TransactionController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showWithdraw()
    {
        return view('admin.withdraw');
    }

    public function showHistorical()
    {
        $transactions =  BankTransaction::where('user_id' ,auth()->id())->get();
        return view('admin.historical' ,compact('transactions'));
    }


    public function transactionStore(Request $request){

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

    public function withdrawStore(Request $request){

        try{
            $data = $request->except('_token');
            $data['payee_user_id'] = $data['recipient_user_id'] = $data['user_id']= auth()->id();
            $data['type'] = 'withdraw';

            $transaction = BankTransaction::create($data);

            session()->flash('app_message', 'You withdraw funds successfully!.');

            return redirect()->back();

        } catch (\Exception $ex) {
            session()->flash('app_error', $ex->getMessage());
            return back();
        }



    }

}
