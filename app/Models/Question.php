<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function questionType()
    {
        return $this->belongsTo(QuestionType::class);
    }

    public function responses()
    {
        return $this->hasMany(Response::class);
    }
}
