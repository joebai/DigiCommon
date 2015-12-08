<?php

namespace Digi\Models;

use Illuminate\Database\Eloquent\Model;

class contact extends Model
{
    public function Agency()
    {
    	return $this->belongsTo("Digi\Models\agency");
    }

    public function Agent()
    {
    	return $this->belongsTo("Digi\Models\agent");
    }

    public function ContactType()
    {
    	return $this->belongsTo("Digi\Models\contact_type", "contact_type");
    }

    public function State()
    {
    	return $this->belongsTo("Digi\Models\state");
    }

    public function Country()
    {
    	return $this->belongsTo("Digi\Models\country", "country");
    }

    public function PhoneNumberType()
    {
    	return $this->belongsTo("Digi\Models\phone_number_type", "phone_number_type");
    }

    public function UrlType()
    {
    	return $this->belongsTo("Digi\Models\url_type", "url_type");
    }
}
