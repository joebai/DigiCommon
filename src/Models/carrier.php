<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class carrier extends Model
{
    public function Agencies()
    {
    	return $this->belongsToMany("App\agency", "agency_carriers");
    }

    public function Products()
    {
    	return $this->hasMany("App\carrier_product");
    }
}
