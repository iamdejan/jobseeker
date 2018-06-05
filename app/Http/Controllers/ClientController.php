<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;
use App\Seeker;
use Illuminate\Support\Facades\Auth;

class ClientController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware("auth:client");
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("client.home");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("client.newjob");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $temp = substr(Job::latest("JobID")->first()->JobID, 3);

        $job = new Job();
        $job->JobID = "JB" . sprintf("%04d", intval($temp) + 1);
        $job->JobName = $request->input("JobName");
        $job->JobSalary = intval($request->input("JobSalary"));
        $job->JobDescription = $request->input("JobDesc");
        $job->ClientNPWP = Auth::guard("client")->user()->ClientNPWP;
        $job->StaffID = "ST0001";

        // dd($job);
        // die();

        $job->save();

        return redirect("/client/jobs");

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view("client.editjob")->with("job", Job::find($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($request->all());
        // die();

        $job = Job::find($id);
        $job->JobName = $request->input("JobName");
        $job->JobSalary = intval($request->input("JobSalary"));
        $job->JobDescription = $request->input("JobDesc");

        // dd($job);
        // die();

        $job->update();
        
        return redirect("/client/jobs");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $job = Job::find($id);
        $job->delete();

        unset($job);

        return redirect("/client/jobs");
    }

    public function showJobs()
    {
        $jobs = Job::where("ClientNPWP", Auth::guard("client")->user()->ClientNPWP)->get();

        // dd($jobs);
        // die();

        return view("client.jobs")->with("jobs", $jobs);
    }
    public function showSeeker($SeekerID)
    {
        // $jobs = Job::where("ClientNPWP", Auth::guard("client")->user()->ClientNPWP)->get();

        // dd($jobs[0]->seekers);
        // die();

        $seeker = Seeker::find($SeekerID);
        
        // dd($seeker);
        // die();

        return view("client.seeker")->with("seeker", $seeker);
    }

    public function showSeekers()
    {
        $jobs = Job::all();

        return view("client.seekers")->with("jobs", $jobs);
    }
}
