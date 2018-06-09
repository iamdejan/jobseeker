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
    public function manages($type)
    {
        $data = null;

        if($type == "seeker") {
            $data = Seeker::all(); //D
        } else if($type == "staff") {
            $manage = DB::table("pengawasan")->where("StaffID", Auth::guard("staff")->user()->StaffID)->select("SuperviseeID")->pluck("SuperviseeID")->toArray();

            $data = Staff::whereIn("StaffID", $manage)->get();
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

    public function delete($type, string $id)
    {
        $item = null;

        if($type == "seeker") {
            $item = Seeker::find($id);
        } else if($type == "staff") {
            $item = Staff::find($id);
        } else if($type == "client") {
            $item = Client::find($id);
        } else if($type == "skill") {
            $item = Skill::find($id);
        } else if($type == "job") {
            $item = Job::find($id);
        }

        // dd($item);
        // die();

        $item->delete();
        unset($item);

        return redirect()->back();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($type)
    {
        return view("staff.new." . $type);
    }

    public function store(Request $request, $type = "skill")
    {
        $temp = substr(Skill::latest("SkillID")->first()->SkillID, 3);

        $skill = new Skill();

        $skill->SkillID = "SL" . sprintf("%04d", intval($temp) + 1);
        $skill->SkillName = $request->input("skill_name");

        // dd($skill);
        // die();

        $skill->save();

        return redirect('/staff/manages/'.$type);

    }

    public function edit($type, $id)
    {
        return view("staff.edit." . $type)->with("skill", Skill::find($id));
    }

    public function update(Request $request, $type = "skill", $id)
    {
        // dd($request->all());
        // die();

        $skill = Skill::find($id);
        $skill->SkillName = $request->input("skill_name");
        $skill->update();

        return redirect("/staff/manages/skill");
    }
}
