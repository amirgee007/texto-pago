<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
    }

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegistrationForm()
    {
        return view('admin.auth.register');
    }

    public function register(Request $request)
    {
        try {
            $this->validator($request->all())->validate();
            $user = User::create($request->except('pin_confirmation' ,'_token'));
            $this->guard()->login($user);

        return $this->registered($request, $user)
            ?: redirect($this->redirectPath());

        }catch (\Exception $ex) {
//            return redirect()->back()->with('message', 'Some thing went wrong!')->withInput();
            return redirect()->back()->with('message', 'Pin Not matched or phone already exist!');

        }








    }



    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'type' => 'required|string|max:255',
            'phone' => 'required|integer|max:255|unique:users',
            'pin' => 'required|integer|min:4|confirmed',
        ]);


//        "type" => "personal"
//  "first_name" => "asadfsda"
//  "last_name" => "asdfsdfa"
//  "user_id" => "222"
//  "phone" => "222"
//  "user_name" => "adsf"
//  "commercial_name" => null
//  "company_name" => null
//  "tax_id" => null
//  "pin" => "1111"
//  "pin_confirmation" => "1111"
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }
}
