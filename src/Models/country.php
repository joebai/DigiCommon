<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class country extends Model
{
    public function Contacts()
    {
    	return $this->hasMany("App\contact", "country");
    }
}
