<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Seeker extends Authenticatable
{
    use Notifiable;

    protected $table = "Seeker";
    public $primaryKey = "SeekerID";
    protected $guard = "seeker";
    public $timestamps = false;

    public $incrementing = false;
    public $keyType = "string";

    protected $guarded = [];

    public function skills()
    {
    	return $this->belongsToMany("App\Skill", "UserSkill", "SeekerID", "SkillID");
    }

    public function jobsApplied()
    {
        return $this->belongsToMany("App\Job", "ApplyQueue", "SeekerID", "JobID")->withPivot("description", "status");
    }
}
