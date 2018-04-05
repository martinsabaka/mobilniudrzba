<?php

namespace App;

use Illuminate\Notifications\Notifiable;
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
        'name', 'email', 'password', 'role_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function role()
    {
        return $this->belongsTo('App\User_role');
    }

    public function blog_posts()
    {
        return $this->hasMany('App\Blog_posts');
    }

    public function isAdmin()
    {
        //return $this->admin; // this looks for an admin column in your users table
        return $this->attributes['role_id'] == 1;
    }

    public function isCustomer()
    {
        return $this->attributes['role_id'] == 2;
    }

    public function isWaiting()
    {
        return $this->attributes['role_id'] == 3;
    }
}
