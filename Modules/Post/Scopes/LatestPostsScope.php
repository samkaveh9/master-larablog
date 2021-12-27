<?php

namespace Modules\Post\Scopes;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

class LatestPostsScope implements Scope
{

    public function apply(Builder $builder, Model $model)
    {
        return $builder->where($model::CREATED_AT, 'desc');   
    }

}