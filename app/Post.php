<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'post_id', 'post_title', 'post_content', 'user_id'
    ];
}
