<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Seeker as Seeker;
use App\Staff as Staff;
use App\Client as Client;
use App\Job as Job;
use App\Skill as Skill;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    function __construct()
    {
        $this->middleware("auth:staff");
    }

    public function index()
    {
        return view("staff.home");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function manage($type)
    {
        $data = null;

        if($type == "seeker") {
            $data = Seeker::all(); //D
        } else if($type == "staff") {
            $manage = DB::table("pengawasan")->where("StaffID", Auth::guard("staff")->user()->StaffID)->select("SuperviseeID")->pluck("SuperviseeID")->toArray();

            $data = Staff::whereIn("StaffID", $manage)->get(); //D & akan direvisi
        } else if($type == "client") {
            $data = Client::all(); //D
        } else if($type == "job") {
            $data = Job::all(); //D
        } else if($type == "skill") {
            $data = Skill::all(); //CRUD
        }

        // dd($data->toArray());
        // die();

        return view("staff.manages." . $type)->with("data", $data);
    }
}
