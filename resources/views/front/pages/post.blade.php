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

    <div class="col-lg-8 mt-5">
        <h1>{{$post->title}}</h1>
        <br><hr>
        <h3>{{$post->headline}}</h3>
        <div class="">
            <img width="600" height="500" src="{{ url('assets/admin/images/posts', $post->post_image)}}" alt="">
        </div>
    </div>
</div>

@endsection