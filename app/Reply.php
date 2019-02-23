<?php

namespace App;
use App\Like, App\Question, App\User;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    public function likes() {
        return $this->hasMany(Like::class);
    }

    public function question() {
        return $this->belongsTo(Question::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
