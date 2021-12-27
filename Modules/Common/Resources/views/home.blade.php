@extends('common::layouts.master')
@section('title', 'Home')

@section('content')

@if (session()->has('success'))
    @include('common::messages.success-alert')
@endif

<div class="row">
    <div class="col-8 mt-3">
        @foreach ($posts as $post)
        <div class="my-3">
          <div class="card shadow">
              <img src="{{ asset('default.jpg') }}" class="card-img-top" alt="" style="height: 240px">
            <div class="card-body">
              <h5 class="card-title">{{ $post->title }}</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
              <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary" style="float: right">Read more</a>
            </div>
          </div>
        </div>
        @endforeach
    </div>
    <div class="col-4 mt-4">
        <div class="card-header">
          <h5 class="card-text">{{ __('content.rightSidebarTitles') }}</h5>
        </div>
        <div class="card" style="">
          <ul class="list-group list-group-flush">
            @foreach ($postsTitle as $post)
            <li class="list-group-item">{{ $post->title }}</li>
            @endforeach
          </ul>
        </div>
    </div>
</div>

@endsection
