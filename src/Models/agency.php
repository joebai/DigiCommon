<?php

namespace Digi\Models;

use Illuminate\Database\Eloquent\Model;

class agency extends Model
{
    protected $table = "agencies";

	public function Agents()
	{
		return $this->hasMany("Digi\Models\agent");
	}

	public function Carriers()
	{
		return $this->belongsToMany("Digi\Models\carrier", "argency_carriers");
	}

	public function Markets()
	{
		return $this->belongsToMany("Digi\Models\market", "agency_markets");
	}

	public function Contacts()
	{
		return $this->hasMany("Digi\Models\contact");
	}
}
