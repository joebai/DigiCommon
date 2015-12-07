<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class phone_number_type extends Model
{
	protected $table = "phone_types";
    public function Contacts()
    {
    	return $this->hasMany("App\contact", "phone_number_type");
    }
}
