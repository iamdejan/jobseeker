<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Staff extends Authenticatable
{
    use Notifiable;

    protected $table = "Staff";
    public $primaryKey = "StaffID";
    protected $guard = "staff";
    public $timestamps = false;

    public $incrementing = false;
    public $keyType = "string";

    protected $fillable = ["StaffID", "StaffName", "StaffPassword", "StaffPosition"];

    public function jobs()
    {
    	return $this->hasMany("App\Job", "StaffID");
    }

}