<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $table = "Job";
    protected $primaryKey = "JobID";

    public $incrementing = false;
    public $keyType = "string";
}
