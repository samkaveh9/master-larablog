<?php

namespace Modules\Post\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Post\Http\Requests\PostRequest;
use Modules\Post\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $posts = Post::latest()->get();
        return view('post::index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('post::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(PostRequest $request)
    {
        Post::create(array_merge($request->validated(),['user_id' => auth()->id()]));
        return redirect()
        ->route('posts.index')
        ->with('success', 'The post has been saved');
    }

    /**
     * Show the specified resource.
     * @param Modules\Post\Models\Post $post 
     * @return Renderable
     */
    public function show(Post $post)
    {
        return view('post::show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param Modules\Post\Models\Post $post 
     * @return Renderable
     */
    public function edit(Post $post)
    {
        return view('post::edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     * @param PostRequest $request
     * @param Modules\Post\Models\Post $post 
     * @return Renderable
     */
    public function update(PostRequest $request, Post $post)
    {
        $post->update($request->validated());
        return redirect(route('posts.index'));
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }
}
