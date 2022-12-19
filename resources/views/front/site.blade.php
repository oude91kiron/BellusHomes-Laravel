
@extends('layouts.front.site')
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
            @break($loop->index == 2)
            @endforeach
            @endisset
            <div class="col-lg-12 text-center">
                <a data-animation="animated fadeInUp delay-10s" href="{{route('properties')}}" class="btn btn-lg btn-theme">More Projects</a>
            </div>
            
        </div>
    </div>
</div>
<!-- Featured projects end -->

<!-- services 3 start -->
<div class="services-3 content-area-20 bg-white">
    <div class="container">
        <div class="main-title">
            <h1>What Are you Looking For?</h1>
            <p>Check our services, And don't hesitate to cnotact us.</p>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12 wow fadeInLeft delay-04s">
                <div class="services-info-3">
                    <i class="flaticon-hotel-building"></i>
                    <h5>Apartments</h5>
                    <p>We provid you the best opportunity to buy or sell an apartment in instabul and other cites around Turkey</p>
                    <a href="{{route('services')}}" class="read-more">Read more...</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 wow fadeInUp delay-04s">
                <div class="services-info-3">
                    <i class="flaticon-house"></i>
                    <h5>Single House</h5>
                    <p>Family homes are designed to be used as a single-dwelling unit, no shared walls, and its own only by you </p>
                    <a href="{{route('services')}}" class="read-more">Read more...</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 wow fadeInDown delay-04s">
                <div class="services-info-3">
                    <i class="flaticon-balcony-and-door"></i>
                    <h5>Laxury Villa</h5>
                    <p>A hand-picked collection of private luxury villas in Turkey, beautiful locations and best price</p>
                    <a href="{{route('services')}}" class="read-more">Read more...</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 wow fadeInRight delay-04s">
                <div class="services-info-3">
                    <i class="flaticon-office-block"></i>
                    <h5>Commercial</h5>
                    <p>Offices, Stores and pice of lands for best real estate investment opportunity with great consoltant</p>
                    <a href="{{route('services')}}" class="read-more">Read more...</a>
                </div>
            </div>
            <div class="col-lg-12 text-center">
                <a data-animation="animated fadeInUp delay-10s" href="{{route('services')}}" class="btn btn-lg btn-theme">More Details</a>
            </div>
        </div>
    </div>
</div>
<!-- services 3 end -->

<!-- Recent Properties start -->
<!-- <div class="recent-properties content-area-2">
    <div class="container">
        <div class="main-title">
            <h1>Recent Properties</h1>
            <p>Most popular properties that get our customer attention.</p>
        </div>

        <div class="row">

            @isset($properties)
            @foreach($properties as $property)
            <div class="col-lg-3 col-md-6 col-sm-12 wow fadeInLeft delay-04s">
                <div class="property-box-8">
                    <div class="property-photo">
                        <img src="{{$property -> images[$loop->first] -> photo ?? '' }}" alt="property-8" class="img-fluid">
                        <div class="tag-for">For Sale</div>
                        <div class="price-ratings-box">
                            <p class="price">
                                ${{$property -> total_price}}
                            </p>
                            <div class="ratings">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                        </div>
                    </div>
                    <div class="detail">
                        <div class="heading">
                            <h3>
                                <a href="{{route('property.details',$property->id)}}">{{$property -> name}}</a>
                            </h3>
                            <div class="location">
                                <a href="{{route('property.details',$property->id)}}">
                                    <i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i>{{$property -> locaation}}
                                </a>
                            </div>
                        </div>
                        <div class="properties-listing">
                            <span>{{$property -> bedrooms}} Beds</span>
                            <span>{{$property -> bathrooms}} Baths</span>
                            <span>{{$property -> area}} sqMeter</span>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            @endisset
        </div>
    </div>
</div> -->
<!-- Recent Properties end -->

<!-- Most popular places start -->
<div class="most-popular-places content-area-3">
    <div class="container">
        <div class="main-title">
            <h1>Most Popular Places</h1>
            <p>The location of our most featured projects in Turkey.</p>
        </div>
        <div class="container">
            <div class="row">
                @isset($cities)
                @foreach($cities as $city)
                <div class="col-lg-4 col-md-12 col-sm-12 col-pad cp-3 wow fadeInUp delay-04s d-none-992">
                    <div class="overview aa overview-box">
                        <img src="https://via.placeholder.com/354x723" alt="popular-places" class="big-img">
                        <div class="mask">
                            <div class="info-2">
                                <div class="ds">
                                    <h2>{{$city->name}}</h2>
                                   
                                    <a href="properties-details.html" class="btn btn-border">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                @endisset
            </div>
        </div>
    </div>
</div>
<!-- Most popular places end -->

<!-- Agent start -->
<!-- <div class="agent content-area">
    <div class="container">
        <div class="main-title">
            <h1>Meet Our Agents</h1>
            <p>All our agents has long experience in the real estate field.</p>
        </div>
        <div class="row">
            
            @isset($users)
            @foreach($users as $user)
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 wow fadeInLeft delay-04s">
                <div class="agent-2">
                    <div class="agent-photo">
                        ???????? recomanded photo size 255x285 ????????? 
                        <img src="{{asset('assets/admin/images/users/'. $user->photo )}}" alt="agent-grid-2" class="img-fluid">
                        <ul class="social-list clearfix">
                            <li><a href="http://{{$user -> facebook}}" target="_blank" class="facebook-bg"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="http://{{$user -> twitter}}" target="_blank" class="twitter-bg"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="http://{{$user -> instagram}}" target="_blank" class="instagram-bg"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="mailto:{{$user -> email}}" target="_blank" class="google-bg"><i class="fa fa-google"></i></a></li>
                            <li><a href="http://wa.me/{{$user -> whatsapp}}" target="_blank" class="whatsapp-bg"><i class="fa fa-whatsapp"></i></a></li>
                        </ul>
                    </div>
                    <div class="agent-details">
                        <h5><a href="agent-detail.html"></a>{{$user -> name}}</h5>
                        <p>{{$user -> position}}</p>
                    </div>
                </div>
            </div>
            @endforeach
            @endisset

        </div>
    </div>
</div > -->
<!-- Agent end -->

<!-- Testimonial 4 start -->
<div class="testimonial-4 tml-4 content-area-7">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="main-title">
                    <h1>Our Testimonial</h1>
                </div>
            </div>
        </div>
        <div class="slick-slider-area">
            <div class="row slick-carousel wow fadeInUp delay-04s" data-slick='{"slidesToShow": 3, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 2}}, {"breakpoint": 768,"settings":{"slidesToShow": 1}}]}'>
                

                <div class="slick-slide-item wow">
                    <div class="testimonial-inner">
                        <div class="content-box">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p>
                        </div>
                        <div class="arrow-down"></div>
                        <div class="media user">
                            <a href="#">
                                <img src="https://via.placeholder.com/60x60 " alt="testimonial-4" class="img-fluid">
                            </a>
                            <div class="media-body align-self-center">
                                <h5>Maria Blank</h5>
                                <h6>Web Developer</h6>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="slick-slide-item wow">
                    <div class="testimonial-inner">
                        <div class="content-box">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p>
                        </div>
                        <div class="arrow-down"></div>
                        <div class="media user">
                            <a href="#">
                                <img src="https://via.placeholder.com/60x60 " alt="testimonial-4" class="img-fluid">
                            </a>
                            <div class="media-body align-self-center">
                                <h5>Karen Paran</h5>
                                <h6>Support Manager</h6>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="slick-slide-item wow">
                    <div class="testimonial-inner">
                        <div class="content-box">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p>
                        </div>
                        <div class="arrow-down"></div>
                        <div class="media user">
                            <a href="#">
                                <img src="https://via.placeholder.com/60x60 " alt="testimonial-4" class="img-fluid">
                            </a>
                            <div class="media-body align-self-center">
                                <h5>Karen Paran</h5>
                                <h6>Support Manager</h6>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- <div class="slick-slide-item">
                    <div class="testimonial-inner">
                        <div class="content-box">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p>
                        </div>
                        <div class="arrow-down"></div>
                        <div class="media user">
                            <a href="#">
                                <img src="https://via.placeholder.com/60x60 " alt="testimonial-4" class="img-fluid">
                            </a>
                            <div class="media-body align-self-center">
                                <h5>
                                    John Pitarshon
                                </h5>
                                <h6>Creative Director</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slick-slide-item">
                    <div class="testimonial-inner">
                        <div class="content-box">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p>
                        </div>
                        <div class="arrow-down"></div>
                        <div class="media user">
                            <a href="#">
                                <img src="https://via.placeholder.com/60x60 " alt="testimonial-4" class="img-fluid">
                            </a>
                            <div class="media-body align-self-center">
                                <h5>
                                    John Pitarshon
                                </h5>
                                <h6>Creative Director</h6>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</div>
<!-- Testimonial 4 end -->

<!-- Blog start -->
<div class="blog content-area-2">
    <div class="container">
        <div class="main-title">
            <h1>Latest Blog</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 wow fadeInLeft delay-04s">
                <div class="row blog-3">
                    <div class="col-lg-5 col-md-12 col-pad ">
                        <div class="photo">
                            <img src="https://via.placeholder.com/224x288" alt="blog-3" class="img-fluid blog-img">
                            <div class="user">
                                <div class="avatar">
                                    <img src="https://via.placeholder.com/30x30" alt="avatar" class="img-fluid rounded-circle">
                                </div>
                                <div class="name">
                                    <h5>Rx Vodro</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-12 col-pad">
                        <div class="detail clearfix">
                            <h3>
                                <a href="blog-single-sidebar-right.html">Buying a Home</a>
                            </h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since<span class="d-none2-1200"> the 1500s, when an unknown printer took a galley of type and</span></p>
                            <div class="blog-footer clearfix">
                                <div class="float-left">
                                    <p class="date"><i class="flaticon-calendar"></i> 24 Sep, 2020</p>
                                </div>
                                <div class="float-right">
                                    <a href="#">Read more..</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 wow fadeInRight delay-04s">
                <div class="row blog-3">
                    <div class="col-lg-5 col-md-12 col-pad ">
                        <div class="photo">
                            <img src="https://via.placeholder.com/224x288" alt="blog-3" class="img-fluid blog-img">
                            <div class="user">
                                <div class="avatar">
                                    <img src="https://via.placeholder.com/30x30" alt="avatar" class="img-fluid rounded-circle">
                                </div>
                                <div class="name">
                                    <h5>Teseira</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-12 col-pad">
                        <div class="detail clearfix">
                            <h3>
                                <a href="blog-single-sidebar-right.html">Selling Your Home</a>
                            </h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since<span class="d-none2-1200"> the 1500s, when an unknown printer took a galley of type and</span></p>
                            <div class="blog-footer clearfix">
                                <div class="float-left">
                                    <p class="date"><i class="flaticon-calendar"></i> 24 Sep, 2020</p>
                                </div>
                                <div class="float-right">
                                    <a href="#">Read more..</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog end -->

<!-- form start -->

<!-- form end -->

@endsection