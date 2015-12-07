<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class market extends Model
{
    public function Agencies()
    {
    	return $this->belongsToMany("App\agency", "agency_markets");
    }

    public function MarketType()
    {
    	return $this->hasOne("App\market_type");
    }
}
