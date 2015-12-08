<?php

namespace Digi\Models;

use Illuminate\Database\Eloquent\Model;

class state extends Model
{
    public function Contacts()
    {
    	return $this->hasMany("Digi\Models\contact");
    }
}
