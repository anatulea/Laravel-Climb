<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \App\Models\User;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [ 'title', 'text_content', 'description', 'author', 'likes_count','user_id'];

    public function post()
    {
        // return $this->hasOne(User::class, 'foreign_key');
        return $this->belongsTo(User::class);
    }
}
