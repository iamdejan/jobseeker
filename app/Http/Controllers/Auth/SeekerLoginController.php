<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Seeker as Seeker;
use Illuminate\Support\Facades\Hash as Hash;

class SeekerLoginController extends Controller
{
    public function __construct()
    {
    	$this->middleware("guest:seeker")->except("logout");
    }

    public function showLoginForm()
    {
    	return view("seeker.login");
    }

    public function login(Request $request)
    {
    	//1. validate input
    	// dd(["SeekerEmail" => $request->SeekerEmail, "SeekerPassword" => $request->SeekerPassword]);
    	// die();

    	//2. attempt
    	$seeker = Seeker::where("SeekerEmail", $request->SeekerEmail)->first();

    	if($seeker && Hash::check($request->SeekerPassword, $seeker->SeekerPassword)) {
    		//3. if successfull, redirect
    		Auth::guard("seeker")->login($seeker);
    		return redirect()->intended(url("/seeker/home"));
    	} else {
    		//4. if not success, go back
    		if(!$seeker) {
    			die("Email dosen't match");
    		} else if(!Hash::check($request->SeekerPassword, $seeker->SeekerPassword)) {
    			die("Password does not match");
    		} else {
    			die("LOL");
    		}
    	}
    	
    }

    public function logout(Request $request)
    {
    	Auth::guard("seeker")->logout();

    	$request->session()->invalidate();

    	return redirect('/');
    }
}
