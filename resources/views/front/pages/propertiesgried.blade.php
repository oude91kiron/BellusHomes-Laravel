@extends('layouts.front.login-site')
@section('content')

<!-- Featured projects start -->
<div class="featured-properties content-area-7">
    <div class="container">

<!-- Sub banner start -->
<div class="sub-banner3 mb-5">
    <div class="container">
        <div class="breadcrumb-area">
            <h1>{{__('site/projects.Project')}}</h1>
            <ul class="breadcrumbs">
                <li><a href="index.html">{{__('site/projects.Home')}}</a></li>
                <li class="active">{{__('site/projects.Read More..')}}</li>
            </ul>
        </div>
    </div>
  </div>
        <div class="main-title">
            <h1>{{__('site/projects.Projects Grid')}}</h1>
            <p><i>{{__('site/projects.Check our best..')}}</i></p>
        </div>
        <div class="row slick-fullwidth wow fadeInUp delay-04s">
            @isset($properties)
            @foreach($properties as $property)
            <div class="col-md-4">
                <div class="property-box">
                    <a href="{{route('property.details',$property->id)}}" class="property-img">
                        <div class="property-thumbnail">
                                <div class="listing-badges">
                                    <span class="featured">{{__('site/projects.Featured')}}</span>
                                </div>
                                <div class="tag-for">{{__('site/projects.For Sale')}}</div>
                                <img src="{{$property -> images[0] -> photo ?? '' }}" 
                                     alt="property-box" 
                                     class="img-fluid" 
                                     style="height: 280px;">
                        </div>
                    </a>

                    <div class="detail">
                        <h1 class="title">
                            <a href="{{route('property.details',$property->id)}}">{{$property->name }}</a>
                        </h1>
                        <div class="location">
                            <a href="{{route('property.details',$property->id)}}">
                                <i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i> {{$property ->location}}
                            </a>
                        </div>
                        <ul class="facilities-list clearfix">
                            <li>
                                <i class="flaticon-bed"></i> {{$property -> bedrooms}}
                            </li>
                            <li>
                                <i class="flaticon-bath"></i> {{$property -> bathrooms}}
                            </li>
                            <li>
                                <i class="flaticon-square-layouting-with-black-square-in-east-area"></i> {{$property -> area}}{{__('site/projects.Meter')}} 
                            </li>
                           
                        </ul>
                    </div>
                    <div class="plan-price">
                        ${{$property ->total_price}}
                    </div>
                </div>
            </div>
            @endforeach
            @endisset
        </div>
    </div>
</div>
<!-- Featured projects end -->

@endsection