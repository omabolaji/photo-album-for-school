<?php

namespace App;
use App\Comment;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{

    // protected $table = 'blogs';
    protected $fillable = ['id', 'user_id','uuid', 'title', 'content', 'comment_count'];

    public $primaryKey = 'id';

    public $timestamps = true;

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
