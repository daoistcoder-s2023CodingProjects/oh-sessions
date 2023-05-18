@extends('layouts.app')

@section('content')
<div class="container" style="max-width: 100%;">
  <div class="row justify-content-center">

    <div class="col-md-8">
      <div class="card mb-3">
        <div class="row g-0">
          <div class="col-md-3">
            <div class="card-img-container">
                  <img src="{{ Auth::user()->profile->image }}" class="img-thumbnail w-100 img-fluid" alt="bruno-profilepic">
            </div>
          </div>
          <div class="col-md-9">
            <div class="card-body">
              <h5 class="card-title"><strong>{{ Auth::user()->name }}</strong></h5>
              <p class="card-text">
               {{ auth()->user()->profile->description }}
              </p>
              <p class="card-text"><small class="text-muted">Bruno test</small></p>
            </div>
          </div>
        </div>
      </div>

      <div class="card">
        <div class="card-body">
          <h5 class="card-title"><strong>Bow! Wow! This is my first Doggo Blog Post!</strong></h5>
          <p class="card-text">I love eating dog food mixed with veggies and meats!</p>
        </div>
        <img src="/svg/brunoFirstPost.webp" class="card-img-bottom img-thumbnail" alt="bruno-first-post">
        <div class="card-body">
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
    </div>

  </div>
</div>

@endsection
