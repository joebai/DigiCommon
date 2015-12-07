<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class url_type extends Model
{
    public function Contacts()
    {
    	return $this->hasMany("App\contact", "url_type");
    }
}
