<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lead extends Model
{
    public function Agent()
    {
    	return $this->belongsTo("App\agent");
    }
}
