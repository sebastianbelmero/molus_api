<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function postLikes()
    {
        return $this->hasMany(PostLike::class);
    }

    public function postComments()
    {
        return $this->hasMany(PostComment::class);
    }

    public function postSaveds()
    {
        return $this->hasMany(PostSaved::class);
    }

    public function profile()
    {
        return $this->belongsTo(Profile::class, 'user_id', 'user_id');
    }

    public function user_profile()
    {
        return $this->profile()->with('major');
    }

    public function liked()
    {
        $liked = $this->postLikes()->where('user_id', auth()->user()->id);
        return $liked;
    }

    public function saveds()
    {
        $saved = $this->postSaveds()->where('user_id', auth()->user()->id);
        return $saved;
    }

}
