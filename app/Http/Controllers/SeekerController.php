<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Seeker;
use App\Job;

class SeekerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
        $this->middleware("auth:seeker");
    }

    public function index()
    {
        return view("seeker.home");
    }

    public function apply(Request $request, $JobID)
    {
        // dd($request->all());
        // die();

        DB::table("applyqueue")->insert([
            "SeekerID" => Auth::guard("seeker")->user()->SeekerID,
            "JobID" => $JobID,
            "description" => $request->input("description"),
            "status" => "pending"

        ]);

        return redirect("/seeker/home");
    }

    public function showApplyForm($JobID)
    {
        return view("seeker.applyjob")->with("job", Job::find($JobID));
    }

    public function showAllJobs()
    {
        $seeker = Seeker::find(Auth::guard("seeker")->user()->SeekerID);

        // dd($seeker->jobsApplied[0]->pivot);
        // die();

        return view("seeker.jobs")->with("seeker", $seeker);
    }
}
