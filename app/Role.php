<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //
    public function users()
    {
    	// agr $primeryKey ko override kia hua ho to end pay id deni prhy gi jo k is table ki local pk hai....
        return $this->belongsToMany(User::class, 'role_user', 'role_id', 'user_id','id');
    }
}
