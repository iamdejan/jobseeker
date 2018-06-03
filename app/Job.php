<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $table = "Job";
    protected $primaryKey = "JobID";

    public $incrementing = false;
    public $keyType = "string";

    public function client()
    {
    	return $this->belongsTo("App\Client", "ClientNPWP");
    }

    public function staff()
    {
    	return $this->belongsTo("App\Staff", "StaffID");
    }

    public function skills()
    {
        return $this->belongsToMany("App\Skill", "JobSkill", "JobID", "SkillID");
    }
}
