<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Team extends Authenticatable
{
            protected $fillable = [
        'team_name', 'user1','user2','user3','user4','user5','user6','password',
    ];
    
    
        protected $hidden = [
        'password', 'remember_token',
    ];
}
