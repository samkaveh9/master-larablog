<?php

namespace Modules\Post\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Post\Models\Post;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = ['name'];


    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }

}
