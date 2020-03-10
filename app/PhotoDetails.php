<?php

namespace App;
use App\Photo;
use App\Album;

use Illuminate\Database\Eloquent\Model;

class PhotoDetails extends Model
{
    protected $fillable = ['photo_id', 'user_id', 'filename'];

    // public function photos()
    // {

    // return $this->hasMany('App\Photo');

    // }

    public function photos()
    {
        return $this->belongsTo(Photo::class, 'photo_id');
    }


    // public function album()
    // {
    //     return $this->belongsTo('App\Album');
    // }

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function school()
    {
        return $this->belongsTo('App\School');
    }
}
