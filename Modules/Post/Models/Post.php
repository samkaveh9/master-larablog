<?php

namespace Modules\Post\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Comment\Models\Comment;
use Modules\User\Models\User;
use Modules\Post\Models\Tag;
use Modules\Post\Scopes\LatestPostsScope;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'content', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }


    protected static function booted()
    {
        // static::addGlobalScope(new LatestPostsScope());
    }



}
