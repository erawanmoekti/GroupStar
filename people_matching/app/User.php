<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $guarded = [];

    public function friend()
    {
        return $this->hasMany('App\UserFriend', 'user_id', 'id');
    }
}
