@section('title', 'Posts')
@extends('common::layouts.master')

@section('content')
   
@if (session()->has('success'))
  @include('common::messages.success-alert')
@endif


<div class="row">    
  @foreach ($posts as $post)
    <div class="col-sm-6 mt-3">
      <div class="card">
          <img src="{{ asset('default.jpg') }}" class="card-img-top" alt="" style="height: 330px">
        <div class="card-body">
          <h5 class="card-title">{{ $post->title }}</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary" style="float: right">Read more</a>
        </div>
      </div>
    </div>
  @endforeach
</div>


@endsection
