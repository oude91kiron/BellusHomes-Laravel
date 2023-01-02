@extends('layouts.front.login-site')
@section('content')

<div class="container">


    <!-- Title -->
    <h1 class="mt-4">{{$post->title}}</h1>

    <!-- Author -->
    <p class="lead">
      Posted {{$post->created_at->diffForHumans()}} by <a href="#">{{$post->user->name}}</a>
    </p>



    <!-- Date/Time -->
    

    <h3><i>{{$post->headline}}</i></h3>
    <!-- Preview Image -->
    <hr>
    <img class="img-fluid rounded my-3" src="{{url('assets/admin/images/posts', $post->post_image)}}" alt="">
    <hr>

    <!-- Post Content -->
    <p>{{$post->paragraph}}</p>

    <!-- Post Content -->
    <h3>{{$post->firstSubhead}}</h3>

    <p>{{$post->secondParagraph}}</p>

    <h3>{{$post->firstSubhead}}</h3>


    <hr>

</div>

@endsection