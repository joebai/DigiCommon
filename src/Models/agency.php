<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class agency extends Model
{
    protected $table = "agencies";

	public function Agents()
	{
		return $this->hasMany("App\agent");
	}

	public function Carriers()
	{
		return $this->belongsToMany("App\carrier", "argency_carriers");
	}

	public function Markets()
	{
		return $this->belongsToMany("App\market", "agency_markets");
	}

	public function Contacts()
	{
		return $this->hasMany("App\contact");
	}
}
