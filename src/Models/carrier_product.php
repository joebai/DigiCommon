<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class carrier_product extends Model
{
    public function Carrier()
    {
    	return $this->belongsTo("App\carrier");
    }
}
