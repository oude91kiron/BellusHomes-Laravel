@extends('layouts.front.login-site')
@section('content')

<div class="container p-3 my-3 ">
    <div>
         <h1 class="mt-4">{{$post->title}}</h1>
        
        <p class="lead">
          by
          <a href="#"><i>{{$post->user->name}}</i></a>
        </p>
        
        <p>Posted on <i>{{$post->created_at->diffForHumans()}}</i></p>
    </div>

    <div class="row">
        <div class="col-md-7">
            <!-- Preview Image -->
            <img class="img-fluid rounded" src="https://via.placeholder.com/590x520" alt="">  <!--  {{$post->post_image}} -->
        </div>
        
        <div class="col-md-5">
            <!-- Post Content -->
            <p>{{$post->body}}</p>
        </div>
    </div>
</div>


       
@endsection