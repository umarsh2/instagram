<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'username','password',
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
    protected static function boot()
    {
        parent::boot();
        static::created(function(User $user){
            $user->profile()->create([
                'title' => $user->username,
                'description' => 'N/A',
                'url' => 'N/A',
            ]);

        });
    }
    public function profile()
    {
        return $this->hasOne(Profile::class);
    }
    // function name should be plural due to hasMany relation...
    public function posts()
    {
        return $this->hasMany(Post::class)->orderBy('created_at', 'DESC');
    }
    public function following()
    {
        return $this->belongsToMany(Profile::class,'profile_user','profile_id','user_id');
    }


    // for M:N perfect web solutions
    public function roles()
    {
        // agr $primeryKey ko override kia hua ho to end pay id, id deni prhy gi...
        return $this->belongsToMany(Role::class, 'role_user', 'role_id', 'user_id', 'id', 'id');
    }
}
