<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SphereAttribute extends Model
{
    protected $fillable = [
                    'sphere_id', 
                    '_type',
                    'label',
                    'icon',
                    'required',
                    'default_value',
                    'position',
                ];
}
