<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Seeker extends Authenticatable
{
    use Notifiable;

    protected $table = "Seeker";

    public $primaryKey = "SeekerID";

    public $timestamps = false;

    // public function getAuthIdentifierName()
    // {
    //     return "SeekerEmail";
    // }

    // public function getAuthPassword()
    // {
    //     return $this->SeekerPassword;
    // }
}
