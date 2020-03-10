<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = ['title','user_id'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    // public function photo_detail()
    // {
    //     return $this->belongsTo('App\PhotoDetails');
    // }

    public function photo_detail()
    {
        return $this->hasMany(PhotoDetails::class);
    }

    public function school()
    {
        return $this->belongsTo('App\School');
    }
}
