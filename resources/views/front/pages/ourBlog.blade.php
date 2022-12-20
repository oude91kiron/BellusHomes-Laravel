@extends('layouts.front.login-site')
@section('content')

<div class="container">
    <div class="row ">
        @foreach($posts as $post) 
        <div class="card mx-3" style="width: 15rem;">
          <img src="https://via.placeholder.com/250x300" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">{{$post->title}}</h5>
            <p class="card-text">{{$post->headline}}</p>
            <a href="#" class="btn btn-primary">Read More</a>
          </div>
        </div>
        @endforeach
    </div>
</div>
@endsection