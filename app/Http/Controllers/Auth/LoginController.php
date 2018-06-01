<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Seeker as Seeker;
use Illuminate\Support\Facades\Hash as Hash;

class LoginController extends Controller
{
    public function __construct()
    {
    	$this->middleware("guest:seeker");
    }

    public function showLoginForm()
    {
    	return view("auth.login");
    }

    public function login(Request $request)
    {
    	//1. validate input
    	// dd(["SeekerEmail" => $request->SeekerEmail, "SeekerPassword" => $request->SeekerPassword]);
    	// die();

    	//2. attempt
    	if(Auth::guard("seeker")->attempt(["SeekerEmail" => $request->SeekerEmail, "SeekerPassword" => $request->SeekerPassword])) {
    		die("SUCCESS");
    	} else {
    		$target = Seeker::where("SeekerEmail", $request->SeekerEmail)->first();

    		// dd($target);
    		// die();

    		if(!$target) {
    			die("EMAIL ERROR");
    		} else if(!Hash::check($request->SeekerPassword, $target->SeekerPassword)) {
    			die("Password not match");
    		} else {
    			die("LOL");
    		}
    	}

    	//3. if successfull, redirect

    	//4. 
    }
}
