<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class state extends Model
{
    public function Contacts()
    {
    	return $this->hasMany("App\contact");
    }
}
