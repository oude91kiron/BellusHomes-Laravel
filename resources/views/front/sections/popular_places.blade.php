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
                        <img src="{{asset($city->photo )}}" alt="popular-places" class="big-img">
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