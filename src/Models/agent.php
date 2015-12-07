<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class agent extends Model
{
    public function Agency()
    {
    	return $this->belongsTo("App\agency");
    }

    public function FriendlyName()
    {
    	return $this->hasOne("App\\friendly_name");
    }

    public function Contacts()
    {
    	return $this->hasMany("App\contact");
    }

    public function Leads()
    {
        return $this->hasMany("App\lead");
    }
}
