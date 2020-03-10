<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testimony extends Model
{
    protected $table = 'testimonies';

    public $primaryKey = 'id';

    public $timestamps = true;

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function school()
    {
        return $this->belongsTo('App\School');
    }
}
