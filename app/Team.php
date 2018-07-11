<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
        protected $fillable = [
        'name', 'password',
    ];
    
    
        protected $hidden = [
        'password', 'remember_token',
    ];
}
