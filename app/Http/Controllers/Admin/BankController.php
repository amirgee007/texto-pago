<?php

namespace App\Http\Controllers\Admin;

use function GuzzleHttp\Promise\all;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BankController extends Controller
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
        return view('admin.historical');
    }

    public function showbanks()
    {
        return view('admin.banks');
    }

    public function sendStore(Request $request){

        dd($request->all());

    }

}
