@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Album</h1>
            <div class="row">
                @foreach($photos as $photo)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ $photo->image }}" class="card-img-top" alt="Photo">
                        <div class="card-body">
                            <h5 class="card-title">{{ $photo->title }}</h5>
                            <p class="card-text">{{ $photo->description }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
