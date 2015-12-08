<?php

namespace Digi\Models;

use Illuminate\Database\Eloquent\Model;

class agent extends Model
{
    public function Agency()
    {
    	return $this->belongsTo("Digi\Models\agency");
    }

    public function FriendlyName()
    {
    	return $this->hasOne("Digi\Models\\friendly_name");
    }

    public function Contacts()
    {
    	return $this->hasMany("Digi\Models\contact");
    }

    public function Leads()
    {
        return $this->hasMany("Digi\Models\lead");
    }
}
