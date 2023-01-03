@extends('layouts.front.login-site')
@section('content')

<div class="container">

  <div class="@if(App()->getLocale() == 'ar') text-right @endif">
    <h1 class="mt-4">{{$post->title}}</h1>

    <!-- Author -->
    <p class="lead">
      Posted {{$post->created_at->diffForHumans()}} by <a href="#">{{$post->user->name}}</a>
    </p>  

    <h3><i>{{$post->headline}}</i></h3>
    <hr>
  </div>
    
    <div>
      <!-- Preview Image -->
    <img width="80%" class="img-fluid rounded ml-5" src="{{url('assets/admin/images/posts', $post->post_image)}}" alt="">
    </div>
    
    
    <div class="@if(App()->getLocale() == 'ar') text-right @endif">
      <hr>
      <p>{{$post->paragraph}}</p>

      <!-- Post Content -->
      <h3>{{$post->firstSubhead}}</h3>
  
      <p>{{$post->secondParagraph}}</p>
  
      <h3>{{$post->secondHeadline}}</h3>
  
      <p>{{$post->thirdParagraph}}</p>
  
      <hr>
    </div>
    <!-- Post Content -->
    

</div>

@endsection