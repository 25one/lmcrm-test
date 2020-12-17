<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
    public function leads()
    {
        //...тут не совсем понял - у вас написано - ...со следующей информацией 
        //для !!!???текущего пользователя - auth()->user()?
        //тогда вы не уточнили, по какому полю связаны таблицы users - leads, я взял agent_id
        return $this->hasMany('App\Models\Lead', 'agent_id'); 
    }
}
