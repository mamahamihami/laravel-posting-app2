<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // 1つの投稿は1人のユーザに属する
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
