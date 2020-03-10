<?php

namespace App;
use App\User;
use App\Blog;
use App\Dashboard;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['blog_id','uuid', 'user_id', 'content'];

    public function blog()
    {
        
        return $this->belongsTo(Blog::class);
    }

    public function dashboard()
    {
       
        return $this->belongsTo(Dashboard::class);        
    }

    public function user()
    {
        return $this->belongsTo(User::class);
      
    }
}
