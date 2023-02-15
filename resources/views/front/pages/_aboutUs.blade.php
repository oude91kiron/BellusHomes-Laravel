@extends('layouts.front.login-site')
@section('content')



<div class="container testimonial-4 tml-4 content-area-5 ">

    <!-- Sub banner start -->
    <div class="sub-banner1 mb-5">
        <div class="container">
            <div class="breadcrumb-area">
                <h1>{{__('site/aboutus.about us')}}</h1>
                <ul class="breadcrumbs">
                    <li><a href="index.html">{{__('site/aboutus.home')}}</a></li>
                    <li class="active">{{__('site/aboutus.our project')}}</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Sub banner end -->
    <div class="row">
        <div class="col-md-6 @if(app()->getLocale() == 'ar') text-right @endif">
            <!-- Post Content -->
            <h1 class="mb-4">{{__('site/aboutus.company name')}}</h1>
            <hr>
            <ul>
                <li>
                    <h3><i>{{__('site/aboutus.Who We Are')}}</i></h3>
                    <p>{{__('site/aboutus.Who We Are p')}}
                    </p>
                    <hr>
                </li>

                <h3><i>{{__('site/aboutus.Our Goals')}}</i></h3>
                    <p>{{__('site/aboutus.Our Goals p')}}
                    </p>
                    <hr>
                </li>
            </ul>   
        </div>

        
        <div class="col-md-6">
            <!-- Preview Image -->
            <img class="img-fluid rounded" src="https://via.placeholder.com/590x520?text=short video" alt="">
        </div>

        <div class="content-area-20">
            @include('front.sections.testimonial')
        </div>
    </div> 

    

    
@endsection