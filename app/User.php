<?php

namespace App;

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
        'role_id', 'is_active','name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function role(){
        return $this->belongsTo('App\Role', 'role_id');
    }

    public function isAdmin(){

        //if not admin
        if ($this->role_id != 1) {
            return false;
        }

        //if not active
        if ($this->is_active != 1) {
            return false;
        }

        //if admin && active too
        return true;
    }

    public function posts(){
        return $this->hasMany('App\Post');
    }

    public function category(){
        return $this->hasMany('App\Category');
    }

}
