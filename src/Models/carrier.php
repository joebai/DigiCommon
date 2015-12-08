<?php

namespace Digi\Models;

use Illuminate\Database\Eloquent\Model;

class carrier extends Model
{
    public function Agencies()
    {
    	return $this->belongsToMany("Digi\Models\agency", "agency_carriers");
    }

    public function Products()
    {
    	return $this->hasMany("Digi\Models\carrier_product");
    }
}
