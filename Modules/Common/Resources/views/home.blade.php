@extends('common::layouts.master')
@section('title', 'Home')

@section('content')

@if (session()->has('success'))
    @include('common::messages.success-alert')
@endif

<div class="row">
    <div class="col-8 mt-3">
        <div class="">
            <div class="card shadow">
                <img src="{{ asset('default.jpg') }}" class="card-img-top" alt="" style="height: 240px">
              <div class="card-body">
                <h5 class="card-title">Lorem ipsum dolor sit amet, consectetur adipisicing.</h5>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary" style="float: right">Read more</a>
              </div>
            </div>
        </div>
    </div>
    <div class="col-4 mt-4">
        <div class="card" style="">
            <ul class="list-group list-group-flush">
              <li class="list-group-item">An item</li>
              <li class="list-group-item">A second item</li>
              <li class="list-group-item">A third item</li>
            </ul>
        </div>
    </div>
</div>

@endsection


@push('scripts')
    <script>
        $('#bologna-list a').on('click', function (e) {
  e.preventDefault()
  $(this).tab('show')
})
    </script>
@endpush
