<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
	protected $table = "Skill";
	public $primaryKey = "SkillID";

    public $incrementing = false;
    public $keyType = "string";
}
