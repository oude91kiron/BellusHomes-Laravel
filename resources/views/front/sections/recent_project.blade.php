<div class="recent-properties content-area-2">
    <div class="container">
        <div class="main-title">
            <h1>Recent Projects</h1>
            <p>Most popular projects that get our customer attention.</p>
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
                                    <i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i> {{$property -> location}}
                                </a>
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