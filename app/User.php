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
        'name', 'email','uuid', 'password',
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

    public function testimonies()
    {
        return $this->hasMany('App\Testimony');
    }

    public function photo_details()
    {
        return $this->hasMany('App\PhotoDetails');
    }

    public function upload()
    {
        return $this->hasMany('App\Upload');
    }

    public function photos()
    {
        return $this->hasMany('App\Photo');
    }

    public function blogs()
    {
        return $this->hasMany('App\Blog');
    }

    public function admins()
    {
        return $this->hasMany('App\Dashboard');
    }

    public function galleries()
    {
        return $this->hasMany('App\Gallery');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
}
