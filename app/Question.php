<?php

namespace App;
use App\Reply, App\Category, App\User;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public function replies() {
        return $this->hasMany(Reply::class);
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
