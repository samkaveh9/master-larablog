<?php

namespace Modules\Post\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Comment\Models\Comment;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'content'];


    public function comments()
    {
        return $this->hasMany(Comment::class);
    }


}
