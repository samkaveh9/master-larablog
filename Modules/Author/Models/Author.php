<?php

namespace Modules\Author\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Author\Models\Profile;

class Author extends Model
{
    use HasFactory;


    public function profile()
    {
        return $this->hasOne(Profile::class);
    }

}
