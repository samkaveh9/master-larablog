<?php

namespace Modules\Common\Scopes;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

class LatestScope implements Scope 
{

    public function apply(Builder $builder, Model $model)
    {
        // return $builder->orderBy($model::CREATED_AT, 'desc');   
        return $builder->where('user_id', auth()->id());   
    }


}
