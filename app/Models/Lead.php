<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    protected $fillable = [
                    'agent_id', 
                    'sphere_id', 
                    'opened', 
                    'email',
                    'customer_id', 
                    'name', 
                    'comment', 
                    'bad',
                    'date'
                ];
   
    public function customer()
    {
        return $this->belongsTo('App\Models\Customer');
    }   
    
    public function open()
    {
        return $this->hasOne('App\Models\OpenLead');
    }
}
