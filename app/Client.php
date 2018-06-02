<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Client extends Authenticatable
{
    use Notifiable;

    protected $table = "Client";
    public $primaryKey = "ClientID";
    protected $guard = "client";
    public $timestamps = false;

    public $incrementing = false;
    public $keyType = "string";
    
}
