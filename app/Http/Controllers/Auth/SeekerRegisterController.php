<?php

namespace App\Http\Controllers\Auth;

use App\Seeker as Seeker;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class SeekerRegisterController extends Controller
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
    protected $redirectTo = '/seeker/home';

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
        return view("seeker.register");
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        // dd($data);
        // die();

        if($data["SeekerPassword"] &&
           $data["SeekerPassword"] != "" &&
           $data["SeekerPassword"] == $data["password_confirmation"]) {
            return Validator::make($data, [
                'fName' => 'required|string|max:190',
                'lName' => 'required|string|max:190',

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
        $temp = substr(Seeker::latest("SeekerID")->first()->SeekerID, 3);

        // dd($SeekerID);
        // die();

        return Seeker::create([
            'SeekerID' => "SK" . sprintf("%04d", intval($temp) + 1),
            'fName' => $data['fName'],
            'lName' => $data['lName'],
            'SeekerPhone' => $data['SeekerPhone'],
            'SeekerEmail' => $data['SeekerEmail'],
            'SeekerAddress' => $data['SeekerAddress'],
            'SeekerGender' => $data['SeekerGender'],
            'SeekerPassword' => Hash::make($data['SeekerPassword']),
        ]);
    }
}
