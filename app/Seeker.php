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
}
