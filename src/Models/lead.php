<?php

namespace Digi\Models;

use Illuminate\Database\Eloquent\Model;

class lead extends Model
{
    public function Agent()
    {
    	return $this->belongsTo("Digi\Models\agent");
    }
}
