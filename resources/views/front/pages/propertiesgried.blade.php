@extends('layouts.front.login-site')
@section('content')

<!-- Featured projects start -->
<div class="featured-properties content-area-7">
    <div class="container">
        <div class="main-title">
            <h1>Featured Projects</h1>
            <p><i>Check our best projects and the opportunities we are providing</i></p>
        </div>

        <div class="row">
        @isset($properties)
        @foreach($properties as $property)
            <div class="col-md-4">
                <div class="property-box">
                    <a href="{{route('property.details',$property->id)}}" class="property-img">
                        <div class="property-thumbnail">
                            
                            <div class="tag-for">For Sale</div>
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
                                <i class="flaticon-square-layouting-with-black-square-in-east-area"></i> {{$property -> area}} Meter
                            </li>
                           
                        </ul>
                    </div>
                    <div class="plan-price">
                        ${{$property ->total_price}}
                    </div>
                </div>
            </div>
            @break($loop->index == 5)
            @endforeach
            @endisset
            <div class="col-lg-12 text-center">
                <a data-animation="animated fadeInUp delay-10s" href="{{route('properties')}}" class="btn btn-lg btn-theme">More Projects</a>
            </div>
        </div>
    </div>
</div>
<!-- Featured projects end -->

@endsection