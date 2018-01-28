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
        $current_user = auth()->user();
        $avail_funds =  $current_user->avail_funds;
        return view('admin.withdraw' ,compact('avail_funds'));
    }

    public function showHistorical()
    {
        $transactions =  BankTransaction::where('user_id' ,auth()->id())->get();
        return view('admin.historical' ,compact('transactions'));
    }


    public function transactionStore(Request $request){

        try{
            $data = $request->except('_token' ,'avail_funds');
            $user = auth()->user();
            $funds = $request->avail_funds - $request->amount;
            if($funds<0){
                session()->flash('app_warning', 'You have not much balance to send payment!');
                return redirect()->back();
            }

            $data['payee_user_id'] = $data['user_id']= $user->id;

            $user->bank()->update(['avail_funds' => $funds]);
            $transaction = BankTransaction::create($data);

            session()->flash('app_message', 'You sent funds successfully!');

            return redirect()->back();

        } catch (\Exception $ex) {
            session()->flash('app_error', $ex->getMessage());
            return back();
        }



    }

    public function withdrawStore(Request $request){

        try{

            $data = $request->except('_token' ,'avail_funds');
            $user = auth()->user();
            $funds = $request->avail_funds - $request->amount;
            $data['payee_user_id'] = $data['recipient_user_id'] = $data['user_id']= $user->id;
            $data['type'] = 'withdraw';

            if($funds<0){
                session()->flash('app_warning', 'You have not much balance to withdraw!');
                return redirect()->back();
            }

            $user->bank()->update(['avail_funds' => $funds]);
            $transaction = BankTransaction::create($data);

            session()->flash('app_message', 'You withdraw funds successfully!.');

            return redirect()->back();

        } catch (\Exception $ex) {
            session()->flash('app_error', $ex->getMessage());
            return back();
        }



    }

}
