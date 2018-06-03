<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
            $data = Staff::all(); //D & akan direvisi
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
