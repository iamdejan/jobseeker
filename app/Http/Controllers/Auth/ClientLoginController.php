<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Client as Client;
use Illuminate\Support\Facades\Hash as Hash;

class ClientLoginController extends Controller
{
    public function __construct()
    {
    	$this->middleware("guest:client")->except("logout");
    }

    public function showLoginForm()
    {
    	return view("client.login");
    }

    protected $redirectTO = "/client/home";

    public function login(Request $request)
    {
    	//1. validate input
    	// dd(["ClientEmail" => $request->ClientEmail, "ClientPassword" => $request->ClientPassword]);
    	// die();

    	//2. attempt
    	$client = Client::where("ClientEmail", $request->ClientEmail)->first();

    	if($client && Hash::check($request->ClientPassword, $client->ClientPassword)) {
    		//3. if successfull, redirect
    		Auth::guard("client")->login($client);

            //die("Success!");

            return redirect()->intended(url("/client/home"));
    	} else {

    		//4. if not success, go back
    		if(!$client) {
    			die("Email dosen't match");
    		} else if(!Hash::check($request->ClientPassword, $client->ClientPassword)) {
    			die("Password does not match");
    		} else {
    			die("LOL");
    		}
    	}
    	
    }

    public function logout(Request $request)
    {
    	Auth::guard("client")->logout();

    	$request->session()->invalidate();

    	return redirect('/');
    }
}
