<?php

namespace Modules\Post\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Common\Scopes\LatestScope;

class Common extends Model
{
    use HasFactory;

    protected static function booted()
    {
        static::addGlobalScope(new LatestScope());   
    }

    // public function scopeLatest(Builder $builder)
    // {
    //     // return $builder->orderBy(static::CREATED_AT, 'desc');
    //     return $builder->where('user_id', auth()->id());
    // }

}
