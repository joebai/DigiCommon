<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contact_type extends Model
{
    public function Contacts()
    {
    	return $this->hasMany("App\contact", "contact_type");
    }
}
