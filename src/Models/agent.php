<?php

namespace Digi\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class agent extends Model implements AuthenticatableContract,
                                    AuthorizableContract,
                                    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'agents';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['agent_first_name', 'agent_middle_name', 'agent_last_name', 'email', 'password', 'agency_id'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
     
    protected $hidden = ['password', 'remember_token'];
    public function Agency()
    {
    	return $this->belongsTo("Digi\Models\agency");
    }

    public function FriendlyName()
    {
    	return $this->hasOne("Digi\Models\\friendly_name");
    }

    public function Contacts()
    {
    	return $this->hasMany("Digi\Models\contact");
    }

    public function Leads()
    {
        return $this->hasMany("Digi\Models\lead");
    }
}
