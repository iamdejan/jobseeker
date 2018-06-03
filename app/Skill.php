<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
	protected $table = "Skill";
	public $primaryKey = "SkillID";

    public $incrementing = false;
    public $keyType = "string";
    public $timestamps = false;

    protected $guarded = [];

    public $attributes = [];
    public $original = [];


    public function jobs()
    {
    	return $this->belongsToMany("App\Job", "JobSkill", "SkillID", "JobID");
    }

    public function seekers()
    {
    	return $this->belongsToMany("App\Seeker", "UserSkill", "SkillID", "SeekerID");
    }
}
