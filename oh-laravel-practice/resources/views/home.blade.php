@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

      <div class="card mb-3">
          <div class="row g-0">
              <div class="col-md-3">
                <img src="/svg/brunoPFP.webp" class="img-thumbnail w-75" alt="bruno-profilepic">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title"><strong>{{ Auth::user()->name }}</strong></h5>
                    <p class="card-text">
                      Hey there, I'm Bruno, a Belgian dog full of energy and character! I love barking, enjoying delicious meals, and sometimes teasing my owner, but deep down, I'm just a young and lovable puppy at heart.
                    </p>
                    <p class="card-text"><small class="text-body-secondary">Hello Human!</small></p>
                </div>
              </div>
          </div>
      </div>

      <div class="card">
        <div class="card-body">
          <h5 class="card-title"><strong>Bow! Wow! This is my first Doggo Blog Post!</strong></h5>
          <p class="card-text">I love eating dogfood mixed with veggies and meats!</p>
        </div>
        <img src="/svg/brunoFirstPost.webp" class="card-img-bottom img-thumbnail" alt="bruno-first-post">
        <div class="card-body">
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
    </div>
</div>
@endsection
