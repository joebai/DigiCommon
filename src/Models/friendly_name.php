<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class friendly_name extends Model
{
    public function Agent()
    {
    	return $this->belongsTo("App\agent");
    }
}
