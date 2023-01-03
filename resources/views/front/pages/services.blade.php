@extends('layouts.front.login-site')
@section('content')
<div class="container">

    <!-- Sub banner start -->
  <div class="sub-banner2 mb-5">
    <div class="container">
      <div class="breadcrumb-area">
        <h1>{{__('site/services.Services')}}</h1>
        <ul class="breadcrumbs">
            <li><a href="index.html">{{__('site/services.home')}}</a></li>
            <li class="active">{{__('site/services.Check What We Provide')}}</li>
        </ul>
      </div>
    </div>
  </div>
  <!-- Sub banner end -->

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="carousel-item active">
        <img width="1200px" height="400px" src="{{asset('assets/front/img/services/turkishcitizinship.jpg')}}" alt="Image">
        <div class="carousel-caption">
          <h3>{{__('site/services.s1')}}</h3>
          <p>{{__('site/services.s1p')}}</p>
        </div>      
      </div>
      <div class="carousel-item">
        <img src="https://via.placeholder.com/1200x400?text=Project tour" alt="Image">
        <div class="carousel-caption">
          <h3>{{__('site/services.s2')}}</h3>
          <p>{{__('site/services.s2p')}}</p>
        </div>      
      </div>
      <div class="carousel-item">
        <img src="https://via.placeholder.com/1200x400?text=Property Managment" alt="Image">
        <div class="carousel-caption">
          <h3>{{__('site/services.s3')}}</h3>
          <p>{{__('site/services.s3p')}}</p>
        </div>      
      </div>
    </div>
    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <div class="container text-center mt-5">    
    <h3>{{__('site/services.s4')}}</h3><br>
    <div class="row">
      <div class="col-sm-4">
        <img src="{{asset('assets/front/img/services/s5.jpg')}}" class="img-responsive " style="width:100%" alt="Image">
        <p>{{__('site/services.s5')}}</p>
      </div>
      <div class="col-sm-4"> 
        <img src="{{asset('assets/front/img/services/s6.jpg')}}" class="img-responsive" style="width:100%" alt="Image">
        <p>{{__('site/services.s6')}}</p>    
      </div>
      <div class="col-sm-4"> 
        <img src="{{asset('assets/front/img/services/s7.jpg')}}" class="img-responsive" style="width:100%" alt="Image">
        <p>{{__('site/services.s7')}}</p>    
      </div>
    </div>

    <div class="row">
      <div class="col-sm-4">
        <img src="{{asset('assets/front/img/services/s8.jpg')}}" class="img-responsive " style="width:100%" alt="Image">
        <p>{{__('site/services.s8')}}</p>
      </div>
      <div class="col-sm-4"> 
        <img src="{{asset('assets/front/img/services/s9.jpg')}}" class="img-responsive" style="width:100%" alt="Image">
        <p>{{__('site/services.s9')}}</p>    
      </div>
      <div class="col-sm-4"> 
        <img src="{{asset('assets/front/img/services/s10.jpg')}}" class="img-responsive" style="width:100%" alt="Image">
        <p>{{__('site/services.s10')}}</p>    
      </div>
    </div>
  </div>

  @include('front/sections/contact_form')
</div>

@endsection