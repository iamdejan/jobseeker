<?php

namespace App\Http\Controllers\Auth;

use App\Client as Client;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class ClientRegisterController extends Controller
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
    protected $redirectTo = '/client/home';

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
        return view("client.register");
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        if($data["ClientPassword"] &&
           $data["ClientPassword"] != "" &&
           $data["ClientPassword"] == $data["password_confirmation"]) {
            return Validator::make($data, [
                'ClientNPWP' => 'required|string|max:30',
                'ClientName' => 'required|string|max:191',
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
        // dd($data);

        return Client::create([
            'ClientNPWP' => $data['ClientNPWP'],
            'ClientName' => $data['ClientName'],
            'ClientEmail' => $data['ClientEmail'],
            'ClientAddress' => $data['ClientAddress'],
            'ClientPhone' => $data['ClientPhone'],
            'ClientDescription' => $data['ClientDesc'],
            'ClientPassword' => Hash::make($data['ClientPassword']),
            'ClientRate' => 0,
            'TypeID' => 'TP0002'
        ]);
    }
}
