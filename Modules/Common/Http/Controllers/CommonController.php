<?php

namespace Modules\Common\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Cache;
use Modules\Post\Models\Post;

class CommonController extends Controller
{
    /**
     * Display Home Page.
     * @return Renderable
     */
    public function index()
    {
        return view('common::home', [
            'postsTitle' => Post::latest()->limit(8)->get()
        ]);
    }
}
