<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\DB;

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
    protected $redirectTo = '/home';

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
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'profile_code'=>'required',
            'gender'=>'required',
            'created_for'=>'required',
            'day'=>'required',
            'month'=>'required',
            'year'=>'required',
            'mobile_number'=>'required|min:10|max:10|unique:users'
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {   
        $profile_code  = 'CM'.$data['gender']."00".$data['profile_code']."000";
        $dob = $data['year']."-".$data['month']."-".$data['day'];
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'profile_code'=>$profile_code,
            'created_for'=>$data['created_for'],
            'gender'=>$data['gender'],
            'dob'=>$dob,
            'mobile_number'=>$data['mobile_number'],
        ]);
    }

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
   */
    public function showRegistrationForm()
    {
        if (!isset(User::all()->last()->id)) {
            $next_profile_id = 1;
        } else {
            $next_profile_id = User::all()->last()->id + 1;
        }
        return view('auth.register',compact('next_profile_id'));
    }
}
