@section('title', 'Create Post')
@extends('common::layouts.master')

@section('content')

<form class="form" action="{{ route('posts.store') }}" method="POST">
    @csrf 
    <div class="col-8 mx-auto pt-3">
        <h4>Add Post</h4>
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $post->title ?? null) }}" placeholder="">
            @error('title')
                <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>
          <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea class="form-control" id="content" name="content" rows="3"></textarea>
            @error('content')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="d-flex justify-content-between">
            <a href="{{ route('posts.index') }}" class="btn btn-secondary">Cancel</a>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>

@endsection
