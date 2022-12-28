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
    <hr>

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
    <p>{{$post->body}}</p>
    <hr>

</div>

@endsection