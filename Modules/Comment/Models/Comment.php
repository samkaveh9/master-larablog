<?php

namespace Modules\Comment\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Post\Models\Post;

class Comment extends Model
{
    use HasFactory;


    public function post()
    {
        return $this->belongsTo(Post::class);
    }

}
