<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OpenLead extends Model
{
    protected $fillable = [
                    'lead_id', 
                    'agent_id'
                ];
}
