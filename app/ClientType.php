<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientType extends Model
{
    protected $table = "ClientType";
    public $primaryKey = "TypeID";
    public $timestamps = false;

    public $incrementing = false;
    public $keyType = "string";

    public function clients()
    {
    	return $this->hasMany("App\Client", "TypeID", "TypeID");
    }
}
