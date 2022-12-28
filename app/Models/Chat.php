<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $appends = ['created_at_human'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function friend()
    {
        return $this->belongsTo(User::class, 'friend_id');
    }

    public function friend_list()
    {
        return $this->belongsTo(User::class, 'friend_list')
        ->with('profile');
    }

    public function getCreatedAtHumanAttribute()
    {
        return Carbon::parse($this->created_at)->diffForHumans();
    }

}
