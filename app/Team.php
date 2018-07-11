<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Team extends Authenticatable
{
            protected $fillable = [
        'name', 'password',
    ];
    
    
        protected $hidden = [
        'password', 'remember_token',
    ];
}
