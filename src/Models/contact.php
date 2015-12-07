<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contact extends Model
{
    public function Agency()
    {
    	return $this->belongsTo("App\agency");
    }

    public function Agent()
    {
    	return $this->belongsTo("App\agent");
    }

    public function ContactType()
    {
    	return $this->belongsTo("App\contact_type", "contact_type");
    }

    public function State()
    {
    	return $this->belongsTo("App\state");
    }

    public function Country()
    {
    	return $this->belongsTo("App\country", "country");
    }

    public function PhoneNumberType()
    {
    	return $this->belongsTo("App\phone_number_type", "phone_number_type");
    }

    public function UrlType()
    {
    	return $this->belongsTo("App\url_type", "url_type");
    }
}
