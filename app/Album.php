<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $fillable = ['album_diary'];
    
    public function photo_details()
    {
        return $this->belongsTo('App\PhotoDetails');
    }

    public function dashboard()
    {
        return $this->belongsTo('App\Dashboard');
    }
}
