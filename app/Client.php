<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Client extends Authenticatable
{
    use Notifiable;

    protected $table = "Client";
    public $primaryKey = "ClientNPWP";
    protected $guard = "client";
    public $timestamps = false;

    public $incrementing = false;
    public $keyType = "string";

    public function getAuthIdentifierName()
    {
        return "ClientEmail";
    }

    public function jobs()
    {
        return $this->hasMany("App\Job", "ClientNPWP", "ClientNPWP");
    }

    public function type()
    {
        return $this->belongsTo("App\ClientType", "TypeID", "TypeID");
    }
}
