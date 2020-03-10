<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dashboard extends Model
{
    protected $table = 'dashboards';

    public $primaryKey = 'id';

    public $timestamps = true;

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function albums()
    {
        return $this->hasMany('App\Album');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
}
