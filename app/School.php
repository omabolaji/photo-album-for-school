<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    public function blogs()
    {
        return $this->hasMany('\App\Blog')->limit(3)->latest();
    }

    public function testimonies()
    {
        return $this->hasMany('\App\Testimony')->inRandomOrder();
    }

    public function albums()
    {
        return $this->hasMany('\App\Album')->limit(3)->latest();
    }

    public function sliders()
    {
        return $this->hasMany('\App\Slider')->limit(3)->latest();
    }

    public function students()
    {
        return $this->hasMany('\App\Student')->limit(4)->latest();
    }

    public function services()
    {
        return $this->hasMany('\App\Service')->limit(6)->latest();
    }

    public function photos()
    {
        return $this->hasMany('App\Photo')->limit(4)->latest();
    }

    public function photo_details()
    {
        return $this->hasMany('App\PhotoDetails')->paginate(6)->latest();
    }
}

