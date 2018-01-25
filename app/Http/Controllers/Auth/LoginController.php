<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;


class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    public function login(Request $request)
    {

        $this->validateLogin($request);

        $user = User::select('id')->where('phone',$request->phone)->where('pin',$request->pin)->first();

        if($user){
            Auth::loginUsingId($user->id);
            return redirect()->intended('/dashboard');
        }

        else
        {
            return redirect()->back()->with('message', 'Invalid credentials!')->withInput();
        }

    }


    protected function validateLogin(Request $request)
    {
        $this->validate($request, [
            'phone' => 'required|integer',
            'pin' => 'required|string',
        ]);
    }


    public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->invalidate();

        return redirect('/login');
    }

    public function showLoginForm()
    {

        return view('admin.auth.login');
    }


}
