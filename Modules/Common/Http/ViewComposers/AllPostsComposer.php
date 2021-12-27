<?php

namespace Modules\Common\Http\ViewComposers;

use Illuminate\Contracts\View\View;
use Modules\Post\Models\Post;

class AllPostsComposer
{

    private $posts;


    public function __construct(Post $posts)
    {
        $this->posts = $posts;
    }

    public function compose(View $view)
    {
        $view->with('posts', $this->posts->all());
    }

}