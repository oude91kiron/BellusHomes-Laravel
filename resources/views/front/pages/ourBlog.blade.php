@extends('layouts.front.login-site')
@section('content')

<div class="container">
      <!-- Sub banner start -->
  <div class="sub-banner mb-5">
    <div class="container">
        <div class="breadcrumb-area">
            <h1>Our Blog</h1>
            <ul class="breadcrumbs">
                <li><a href="index.html">Home</a></li>
                <li class="active">Read More..</li>
            </ul>
        </div>
    </div>
  </div>

  <!-- Sub banner end -->
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