<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Staff as Staff;
use Illuminate\Support\Facades\Hash as Hash;

class StaffLoginController extends Controller
{
    public function __construct()
    {
    	$this->middleware("guest:staff")->except("logout");
    }

    public function showLoginForm()
    {
    	return view("staff.login");
    }

    public function login(Request $request)
    {
    	//1. validate input
    	// dd(["StaffID" => $request->StaffID, "StaffPassword" => $request->StaffPassword]);
    	// die();

    	//2. attempt
    	$staff = Staff::where("StaffID", $request->StaffID)->first();

    	if($staff && Hash::check($request->StaffPassword, $staff->StaffPassword)) {
    		//3. if successfull, redirect
    		Auth::guard("staff")->login($staff);
    		return redirect()->intended(url("/staff/home"));
    	} else {
    		//4. if not success, go back
    		if(!$staff) {
    			die("Email dosen't match");
    		} else if(!Hash::check($request->StaffPassword, $staff->StaffPassword)) {
    			die("Password does not match");
    		} else {
    			die("LOL");
    		}
    	}
    	
    }

    public function logout(Request $request)
    {
    	Auth::guard("staff")->logout();

    	$request->session()->invalidate();

    	return redirect('/');
    }
}
