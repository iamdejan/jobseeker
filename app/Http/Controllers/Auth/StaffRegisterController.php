<?php

namespace App\Http\Controllers\Auth;

use App\Staff as Staff;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class StaffRegisterController extends Controller
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
    protected $redirectTo = '/staff/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function showRegistrationForm()
    {
        return view("staff.register");
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        if($data["StaffPassword"] &&
           $data["StaffPassword"] != "" &&
           $data["StaffPassword"] == $data["password_confirmation"]) {
            return Validator::make($data, [
                'StaffID' => 'required|string|max:255',
                'StaffName' => 'required|string|max:255',
            ]);
        }
        return false;
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return Staff::create([
            'StaffID' => $data['StaffID'],
            'StaffName' => $data['StaffName'],
            'StaffPassword' => Hash::make($data['StaffPassword']),
            'StaffPosition' => "Officer"
        ]);
    }
}
